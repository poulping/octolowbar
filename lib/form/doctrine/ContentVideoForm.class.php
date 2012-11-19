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

      $this->useFields(array('title', 'date_published', 'video_url', 'content_additional'));

      $this->setValidator('video_url', new sfValidatorUrl());

  }
}
