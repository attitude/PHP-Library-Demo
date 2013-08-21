<?php

require_once dirname(dirname(__FILE__)).'/config-common-header.php';

/* Database Boot */

require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Interfaces/Storage/PDOConnection.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/DatabaseConnection.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/DatabaseStorage/TableStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/DatabaseStorage/TableStorage/DocumentStorage.php';

/*----------------------------------------------------------------------------*/
/*                                   SETUP                                    */
/*----------------------------------------------------------------------------*/

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

DependencyContainer::set('UsersTable::$database_engine', 'UsersDatabaseConnection');

DependencyContainer::set('UsersDatabaseConnection::$dsn',      'mysql:dbname=test_database_connection;host=127.0.0.1');
DependencyContainer::set('UsersDatabaseConnection::$username', 'root');
DependencyContainer::set('UsersDatabaseConnection::$password', 'root');

DependencyContainer::set('UsersTable::$table_name',  'users');
DependencyContainer::set('UsersTable::$primary_key', '_id');

DependencyContainer::set('UsersTable::$data_serializer', '\attitude\Data\JSONSerializer');
DependencyContainer::set('attitude\Data\JSONSerializer::$compress', 9);

//-- BOOTED
$memory_get_usage_boot = memory_get_usage(MEMORY_GET_USAGE_REAL);

class UsersDatabaseConnection extends \attitude\Storage\DatabaseConnection {}

class UsersTable extends \attitude\Storage\DatabaseStorage\TableStorage\DocumentStorage
{
    public function __construct()
    {
        return parent::__construct();
    }
}
