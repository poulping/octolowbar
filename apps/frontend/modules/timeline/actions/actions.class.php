<?php

/**
 * timeline actions.
 *
 * @package    octolowbar
 * @subpackage timeline
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class timelineActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->contents = ContentTable::getInstance()->getAllChronological();
        $keys           = $this->contents->getPrimaryKeys();
        $this->getUser()->setKeysSent($keys);
    }

    public function executeAdd(sfWebRequest $request)
    {
        $content_type = $request->getParameter('content_type', false);
        $callable = 'Add' . sfInflector::camelize($content_type);
        $is_callable = method_exists($this, 'execute' . $callable);



        if ($content_type && $is_callable)
        {
            $this->forward('timeline', $callable);
        }

        $this->form = false;

    }

    public function executeAddVideo(sfWebRequest $request)
    {
        $this->form = new ContentVideoForm();
        if ($request->isMethod('post'))
        {

            if ($this->processForm($this->form, $request))
            {
                $this->redirect('add_content');
            }
        }

        $this->setTemplate('add');
    }

    public function executeAddAudio(sfWebRequest $request)
    {
        $this->form = new ContentAudioForm();

        if ($request->isMethod('post'))
        {
            if ($this->processForm($this->form, $request))
            {
                $this->redirect('add_content');
            }
        }

        $this->setTemplate('add');
    }

    public function executeAddText(sfWebRequest $request)
    {
        $this->form = new ContentTextForm();

        if ($request->isMethod('post'))
        {
            if ($this->processForm($this->form, $request))
            {
                $this->redirect('add_content');
            }
        }

        $this->setTemplate('add');
    }

    public function executeAddImage(sfWebRequest $request)
    {
        $this->form = new ContentImageForm();

        if ($request->isMethod('post'))
        {
            if ($this->processForm($this->form, $request))
            {
                $this->redirect('add_content');
            }
        }

        $this->setTemplate('add');
    }

    protected function ProcessForm($form, $request)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

        if ($form->isValid())
        {
            $this->getUser()->setFlash('content_add.success', 'Your content has been succesfully added');
            //var_dump($form->getObject()->getType());exit;
            $form->save();

            return true;
        }
        return false;
    }

    public function executeShow(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->forward404Unless($id);
        $this->content = ContentTable::getInstance()->getWithComments($id);
        $this->forward404Unless($id);

        $this->comment_form = new CommentForm(array(), array('content' => $this->content));

    }

    public function executeAddComment(sfWebRequest $request)
    {
        //$arrayValues = $request->getPostParameters();

        $this->comment_form = new CommentForm();
        $this->comment_form->bind($request->getParameter($this->comment_form->getName()));
        if ($this->comment_form->isValid())
        {
            $comment = $this->comment_form->save();
            $this->redirect('@show_content?id='.$comment->getContentId());
        }
        $this->setTemplate('show');
    }

    public function executeAjaxPolling(sfWebRequest $request)
    {
        $sent = $this->getUser()->getKeys();
        $new_content = ContentTable::getInstance()->getLatestChronologicalExcept($sent);

        if ($new_content)
        {
            $this->getUser()->setKeysSent(array($new_content->getPrimaryKey()));
            return $this->renderPartial('timeline/contentContainer', array('content' => $new_content, 'col' => false));
        }
        return $this->renderText('0');
    }
}
