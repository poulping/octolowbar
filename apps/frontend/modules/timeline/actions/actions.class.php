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
        $this->contents  = ContentTable::getInstance()->getAllChronological();
        $keys = $this->contents->getPrimaryKeys();
        $this->getUser()->setKeysSent($keys);
    }

    public function executeAdd(sfWebRequest $request)
    {
        //$this->forward('default', 'module');
    }

    public function executeShow(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->forward404Unless($id);
        $this->content = ContentTable::getInstance()->getWithComments($id);
    }
}
