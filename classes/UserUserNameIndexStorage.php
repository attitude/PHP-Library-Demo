<?php

use \attitude\Finals\DependencyInjection\DependencyContainer as DependencyContainer;

class UserUserNameIndexStorage extends \attitude\Abstracts\Storage\FileStorage\IndexStorage
{
    private static $instance = null;

    protected static $index_name = 'user_name';
    protected static $is_unique  = true;

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}
