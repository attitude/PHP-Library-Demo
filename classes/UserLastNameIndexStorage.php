<?php

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

class UserLastNameIndexStorage extends \attitude\Storage\FileStorage\IndexStorage
{
    private static $instance = null;
    protected static $index_name = 'last_name';

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}
