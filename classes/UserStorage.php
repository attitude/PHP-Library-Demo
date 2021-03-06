<?php

use \attitude\Implementations\DependencyInjection\DependencyContainer as DependencyContainer;

class UserStorage extends \attitude\Abstracts\Storage\ObjectStorage
{
    private static $instance = null;

    protected static $indexes = array('last_name', 'first_name', 'user_name');

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}
