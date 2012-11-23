<?php

/**
 * Comment form.
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentForm extends BaseCommentForm
{
  public function configure()
  {
        $content = $this->getOption('content', false);
        if ($content)
        {
            $this->getObject()->setContent($content);
        }


        $this->useFields(array('username', 'content', 'content_id'));

      $this->setWidget('content_id', new sfWidgetFormInputHidden());
  }
}
