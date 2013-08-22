<?php

use \attitude\Finals\DependencyInjection\DependencyContainer as DependencyContainer;

class UserDocumentStorage extends \attitude\Abstracts\Storage\FileStorage\DocumentStorage
{
    private static $instance = null;

    public static function instance()
    {
        return self::$instance===null ? new self : self::$instance;
    }
}

