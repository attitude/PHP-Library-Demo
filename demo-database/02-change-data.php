<?php

require_once 'config.php';

class UsersDatabaseConnection extends \attitude\Storage\DatabaseConnection {}
class UsersTable extends \attitude\Storage\DatabaseStorage\TableStorage\DocumentStorage {}

$user_table = new UsersTable;

if ($user = $user_table->get('46c0aea4e1914c8197050f8fb76cbb40')) {
    $user['first_name'] = 'Janko';
    $user['user_name']  = 'janko_kroner';

    var_dump($user_table->set('46c0aea4e1914c8197050f8fb76cbb40', $user));
} else {
    trigger_error('Failed to load user. Change the key.');
}

require_once dirname(dirname(__FILE__)).'/config-common-footer.php';
