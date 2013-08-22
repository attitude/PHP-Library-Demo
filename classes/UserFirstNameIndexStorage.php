<?php

use \attitude\Finals\DependencyInjection\DependencyContainer as DependencyContainer;

class UserFirstNameIndexStorage extends \attitude\Abstracts\Storage\FileStorage\IndexStorage
{
    private static $instance = null;
    protected static $index_name = 'first_name';

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}
