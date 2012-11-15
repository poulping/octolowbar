<?php

/**
 * ContentText form base class.
 *
 * @method ContentText getObject() Returns the current form's model object
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentTextForm extends ContentForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('content_text[%s]');
  }

  public function getModelName()
  {
    return 'ContentText';
  }

}
