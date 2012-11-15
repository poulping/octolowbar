<?php

/**
 * ContentVideo form base class.
 *
 * @method ContentVideo getObject() Returns the current form's model object
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentVideoForm extends ContentForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('content_video[%s]');
  }

  public function getModelName()
  {
    return 'ContentVideo';
  }

}
