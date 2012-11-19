<?php

/**
 * ContentImage form.
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContentImageForm extends BaseContentImageForm
{
  /**
   * @see ContentForm
   */
  public function configure()
  {
    parent::configure();

      $this->useFields(array('title', 'date_published', 'image', 'content_additional'));

      $this->setWidget('image', new sfWidgetFormInputFile());

      $this->setValidator('image', new sfValidatorFile(array(
          'mime_types'      => 'web_images',
          'path'            => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'lowbar',))
      );
  }
}
