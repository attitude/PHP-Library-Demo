<?php

require_once dirname(dirname(__FILE__)).'/config-common-header.php';

/*----------------------------------------------------------------------------*/
/*                                   SETUP                                    */
/*----------------------------------------------------------------------------*/

use \attitude\Finals\DependencyInjection\DependencyContainer as DependencyContainer;

DependencyContainer::set('UsersTable::$database_engine', 'UsersDatabaseConnection');

DependencyContainer::set('UsersDatabaseConnection::$dsn',      'mysql:dbname=test_database_connection;host=127.0.0.1');
DependencyContainer::set('UsersDatabaseConnection::$username', 'root');
DependencyContainer::set('UsersDatabaseConnection::$password', 'root');

DependencyContainer::set('UsersTable::$table_name',  'users');
DependencyContainer::set('UsersTable::$primary_key', '\attitude\Finals\Storage\Column\DocumentStorage\IDColumn');
DependencyContainer::set('UsersTable::$created_column', '\attitude\Finals\Storage\Column\DocumentStorage\CreatedColumn');
DependencyContainer::set('UsersTable::$updated_column', '\attitude\Finals\Storage\Column\DocumentStorage\UpdatedColumn');
DependencyContainer::set('UsersTable::$body_column', '\attitude\Finals\Storage\Column\DocumentStorage\BodyColumn');

DependencyContainer::set('UsersTable::$data_serializer', '\attitude\Finals\Data\JSONSerializer');
DependencyContainer::set('attitude\Finals\Data\JSONSerializer::$compress', 9);

//-- BOOTED
$memory_get_usage_boot = memory_get_usage(MEMORY_GET_USAGE_REAL);

class UsersDatabaseConnection extends \attitude\Abstracts\Storage\DatabaseConnection
{
    public function __construct()
    {
        return parent::__construct();
    }
}

class UsersTable extends \attitude\Abstracts\Storage\DatabaseStorage\TableStorage\DocumentStorage
{
    public function __construct()
    {
        return parent::__construct();
    }
}
