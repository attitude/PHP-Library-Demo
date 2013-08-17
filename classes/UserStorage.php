<?php

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

class UserStorage extends \attitude\Storage\FileStorage\ObjectStorage
{
    private static $instance = null;

    protected static $indexes = array('last_name', 'first_name', 'user_name');

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}
