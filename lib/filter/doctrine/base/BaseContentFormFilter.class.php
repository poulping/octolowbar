<?php

/**
 * Content filter form base class.
 *
 * @package    octolowbar
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_published'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'video_url'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content_additional' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'              => new sfValidatorPass(array('required' => false)),
      'type'               => new sfValidatorPass(array('required' => false)),
      'date_published'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'video_url'          => new sfValidatorPass(array('required' => false)),
      'content_additional' => new sfValidatorPass(array('required' => false)),
      'content'            => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('content_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Content';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'title'              => 'Text',
      'type'               => 'Text',
      'date_published'     => 'Date',
      'video_url'          => 'Text',
      'content_additional' => 'Text',
      'content'            => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
