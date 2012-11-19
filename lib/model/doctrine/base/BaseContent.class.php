<?php

/**
 * BaseContent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $type
 * @property datetime $date_published
 * @property string $video_url
 * @property string $video_thumb
 * @property string $content_additional
 * @property string $content
 * @property string $image
 * @property Doctrine_Collection $Comments
 * 
 * @method string              getTitle()              Returns the current record's "title" value
 * @method string              getType()               Returns the current record's "type" value
 * @method datetime            getDatePublished()      Returns the current record's "date_published" value
 * @method string              getVideoUrl()           Returns the current record's "video_url" value
 * @method string              getVideoThumb()         Returns the current record's "video_thumb" value
 * @method string              getContentAdditional()  Returns the current record's "content_additional" value
 * @method string              getContent()            Returns the current record's "content" value
 * @method string              getImage()              Returns the current record's "image" value
 * @method Doctrine_Collection getComments()           Returns the current record's "Comments" collection
 * @method Content             setTitle()              Sets the current record's "title" value
 * @method Content             setType()               Sets the current record's "type" value
 * @method Content             setDatePublished()      Sets the current record's "date_published" value
 * @method Content             setVideoUrl()           Sets the current record's "video_url" value
 * @method Content             setVideoThumb()         Sets the current record's "video_thumb" value
 * @method Content             setContentAdditional()  Sets the current record's "content_additional" value
 * @method Content             setContent()            Sets the current record's "content" value
 * @method Content             setImage()              Sets the current record's "image" value
 * @method Content             setComments()           Sets the current record's "Comments" collection
 * 
 * @package    octolowbar
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseContent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('content');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('date_published', 'datetime', null, array(
             'type' => 'datetime',
             'notnull' => true,
             ));
        $this->hasColumn('video_url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('video_thumb', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('content_additional', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('content', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('detect_relations', false);

        $this->setSubClasses(array(
             'ContentVideo' => 
             array(
              'type' => 'video',
             ),
             'ContentAudio' => 
             array(
              'type' => 'audio',
             ),
             'ContentText' => 
             array(
              'type' => 'text',
             ),
             'ContentImage' => 
             array(
              'type' => 'image',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comment as Comments', array(
             'local' => 'id',
             'foreign' => 'content_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}