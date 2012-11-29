<?php

/**
 * Content form.
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContentForm extends BaseContentForm
{
  public function configure()
  {


      $year = '2003';
      $array_years = array();
      for ($i = $year; $i < 2013; $i++)
      {
          $array_years[$i] = $i;
      }
      // content must be a type of content
      if (!is_subclass_of($this->getObject(), 'Content'))
      {
          throw new sfException('object needs to be a descendant of Content');
      }

      //$this->setWidget('type', new sfWidgetFormInputHidden());
      $this->setWidget('title', new sfWidgetFormInputText());

      $this->setValidator('title', new sfValidatorString());

      $this->setWidget('date_published', new sfWidgetFormI18nDate(array('culture' => 'en', 'years' => $array_years)));

      $this->setValidator('date_published', new sfValidatorDate());

  }

    protected function doUpdateObject($values)
    {
      $values['type'] = $this->getObject()->getType();
        return parent::doUpdateObject($values);
    }


}
