<?php

/**
 * ContentText form.
 *
 * @package    octolowbar
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContentTextForm extends BaseContentTextForm
{
    /**
     * @see ContentForm
     */
    public function configure()
    {
        parent::configure();

        $this->useFields(array('title', 'date_published', 'content'));

        $this->setValidator('content', new sfValidatorString());
    }
}
