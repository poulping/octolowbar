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

        $this->setTemplate('add');
    }

    public function executeAddAudio(sfWebRequest $request)
    {
        $this->form = new ContentAudioForm();

        $this->setTemplate('add');
    }

    public function executeAddText(sfWebRequest $request)
    {
        $this->form = new ContentTextForm();

        $this->setTemplate('add');
    }

    public function executeProcessForm(sfWebRequest $request)
    {

    }

    public function executeShow(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->forward404Unless($id);
        $this->content = ContentTable::getInstance()->getWithComments($id);
    }
}
