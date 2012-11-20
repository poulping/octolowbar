<?php

/**
 * ContentVideo form.
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContentVideoForm extends BaseContentVideoForm
{
  /**
   * @see ContentForm
   */
  public function configure()
  {
    parent::configure();

      $this->useFields(array('title', 'date_published', 'video_url', 'video_thumb', 'content_additional'));

      $this->setWidget('video_thumb', new sfWidgetFormInputFile());

      $this->setValidator('video_url', new sfValidatorUrl());

      $this->setValidator('video_thumb', new sfValidatorFile(array(
          'mime_types'      => 'web_images',
          'path'            => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'lowbar',
          'required'        => false

      )));

  }

}
