<?php

require_once dirname(dirname(__FILE__)).'/config-common-header.php';

/* Storage Boot */

require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Interfaces/Storage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Interfaces/Storage/IndexStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Interfaces/Storage/DocumentStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Interfaces/Storage/ObjectStorage.php';

require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/ObjectStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/FileStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/FileStorage/DocumentStorage.php';
require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/Storage/FileStorage/IndexStorage.php';

/* ORM Boot */

require_once dirname(dirname(dirname(__FILE__))).'/lib/attitude/ORM/Model.php';

/* Test Classes */

require_once dirname(dirname(__FILE__)).'/classes/UserStorage.php';
require_once dirname(dirname(__FILE__)).'/classes/UserDocumentStorage.php';
require_once dirname(dirname(__FILE__)).'/classes/UserLastNameIndexStorage.php';
require_once dirname(dirname(__FILE__)).'/classes/UserFirstNameIndexStorage.php';
require_once dirname(dirname(__FILE__)).'/classes/UserUserNameIndexStorage.php';
require_once dirname(dirname(__FILE__)).'/classes/UserModel.php';

/*----------------------------------------------------------------------------*/
/*                                   SETUP                                    */
/*----------------------------------------------------------------------------*/

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

define('FILE_STORAGE_PATH', dirname(dirname(__FILE__)).'/fileDB');

DependencyContainer::set('UserModel::$storage', 'UserStorage');

DependencyContainer::set('UserStorage::$document_storage', 'UserDocumentStorage');

DependencyContainer::set('UserStorage::$indexes_storage[last_name]', 'UserLastNameIndexStorage');
DependencyContainer::set('UserStorage::$indexes_storage[first_name]', 'UserFirstNameIndexStorage');
DependencyContainer::set('UserStorage::$indexes_storage[user_name]', 'UserUserNameIndexStorage');

DependencyContainer::set('UserDocumentStorage::$data_serializer',       '\attitude\Data\JSONSerializer');
DependencyContainer::set('UserLastNameIndexStorage::$data_serializer',  '\attitude\Data\JSONSerializer');
DependencyContainer::set('UserUserNameIndexStorage::$data_serializer',  '\attitude\Data\JSONSerializer');
DependencyContainer::set('UserFirstNameIndexStorage::$data_serializer', '\attitude\Data\JSONSerializer');

DependencyContainer::set('attitude\Data\JSONSerializer::$compress', 0);

DependencyContainer::set('UserDocumentStorage::$storage_path',       FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserLastNameIndexStorage::$storage_path',  FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserFirstNameIndexStorage::$storage_path', FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserUserNameIndexStorage::$storage_path',  FILE_STORAGE_PATH.'/users');

//-- BOOTED
$memory_get_usage_boot = memory_get_usage(MEMORY_GET_USAGE_REAL);

