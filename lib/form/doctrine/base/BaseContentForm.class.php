<?php

/**
 * Content form base class.
 *
 * @method Content getObject() Returns the current form's model object
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'title'              => new sfWidgetFormInputText(),
      'type'               => new sfWidgetFormInputText(),
      'date_published'     => new sfWidgetFormInputText(),
      'video_url'          => new sfWidgetFormInputText(),
      'video_thumb'        => new sfWidgetFormInputText(),
      'content_additional' => new sfWidgetFormTextarea(),
      'content'            => new sfWidgetFormTextarea(),
      'image'              => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'              => new sfValidatorString(array('max_length' => 255)),
      'type'               => new sfValidatorString(array('max_length' => 20)),
      'date_published'     => new sfValidatorPass(),
      'video_url'          => new sfValidatorString(array('max_length' => 255)),
      'video_thumb'        => new sfValidatorString(array('max_length' => 255)),
      'content_additional' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'content'            => new sfValidatorString(array('max_length' => 4000)),
      'image'              => new sfValidatorString(array('max_length' => 255)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Content';
  }

}
