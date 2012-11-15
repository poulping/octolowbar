<?php

/**
 * ContentAudio form base class.
 *
 * @method ContentAudio getObject() Returns the current form's model object
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentAudioForm extends ContentForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('content_audio[%s]');
  }

  public function getModelName()
  {
    return 'ContentAudio';
  }

}
