<?php

/**
 * ContentTextTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ContentTextTable extends ContentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ContentTextTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ContentText');
    }
}