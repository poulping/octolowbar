<?php

/**
 * ContentVideo filter form base class.
 *
 * @package    octolowbar
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContentVideoFormFilter extends ContentFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('content_video_filters[%s]');
  }

  public function getModelName()
  {
    return 'ContentVideo';
  }
}
