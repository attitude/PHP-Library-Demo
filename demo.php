<?php

define('MEMORY_GET_USAGE_REAL', false);

$memory_get_usage_start = memory_get_usage(MEMORY_GET_USAGE_REAL);

/* System Boot */

require_once dirname(dirname(__FILE__)).'/lib/attitude/Interfaces/Storage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Interfaces/Storage/IndexStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Interfaces/Storage/DocumentStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Interfaces/Storage/ObjectStorage.php';

/* Dependency Container */

require_once dirname(dirname(__FILE__)).'/lib/attitude/DependencyInjection/DependencyContainer.php';

/* Storage Boot */

require_once dirname(dirname(__FILE__)).'/lib/attitude/Storage/ArrayStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Storage/FileStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Storage/FileStorage/DocumentStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Storage/FileStorage/IndexStorage.php';
require_once dirname(dirname(__FILE__)).'/lib/attitude/Storage/FileStorage/ObjectStorage.php';

/* ORM Boot */

require_once dirname(dirname(__FILE__)).'/lib/attitude/ORM/Model.php';

/* Test Classes */

require_once dirname(__FILE__).'/classes/UserStorage.php';
require_once dirname(__FILE__).'/classes/UserDocumentStorage.php';
require_once dirname(__FILE__).'/classes/UserLastNameIndexStorage.php';
require_once dirname(__FILE__).'/classes/UserFirstNameIndexStorage.php';
require_once dirname(__FILE__).'/classes/UserUserNameIndexStorage.php';
require_once dirname(__FILE__).'/classes/UserModel.php';

/*----------------------------------------------------------------------------*/

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

define('FILE_STORAGE_PATH', dirname(__FILE__).'/fileDB');

DependencyContainer::set('UserModel::$storage', 'UserStorage');

DependencyContainer::set('UserStorage::$document_storage', 'UserDocumentStorage');

DependencyContainer::set('UserStorage::$indexes_storage[last_name]', 'UserLastNameIndexStorage');
DependencyContainer::set('UserStorage::$indexes_storage[first_name]', 'UserFirstNameIndexStorage');
DependencyContainer::set('UserStorage::$indexes_storage[user_name]', 'UserUserNameIndexStorage');

DependencyContainer::set('UserDocumentStorage::$storage_path',       FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserLastNameIndexStorage::$storage_path',  FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserFirstNameIndexStorage::$storage_path', FILE_STORAGE_PATH.'/users');
DependencyContainer::set('UserUserNameIndexStorage::$storage_path',  FILE_STORAGE_PATH.'/users');

/*----------------------------------------------------------------------------*/

UserDocumentStorage::$compress = 9;

//-- BOOTED
$memory_get_usage_boot = memory_get_usage(MEMORY_GET_USAGE_REAL);


$mode = 'create';

switch ($mode) {
    case 'create':
        $user = new UserModel;
        $user->user_name = 'martin_adamko';
        $user->first_name = 'Martin';
        $user->last_name  = 'Adamko';
        $user->save();

        $user = new UserModel;
        $user->user_name = 'milan_lasica';
        $user->first_name = 'Milan';
        $user->last_name  = 'Lasica';
        $user->save();

        $user = new UserModel;
        $user->user_name = 'jan_kroner';
        $user->first_name = 'Ján';
        $user->last_name  = 'Króner';
        $id = $user->save();

        $user = new UserModel($id);
        var_dump($user);

        $user->first_name = 'Janko';
        $user->save();

        var_dump($user, $user->full_name);
    break;
    case 'read':
        $user = new UserModel('d0b1b09a5eb64ee5a785e79c46970c35');
        var_dump($user, $user->full_name);
    break;
}

echo "\n{$memory_get_usage_start}\n{$memory_get_usage_boot}\n".memory_get_usage(MEMORY_GET_USAGE_REAL)."\nRun OK\n\n";
