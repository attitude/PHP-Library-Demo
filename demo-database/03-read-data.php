<?php

require_once 'config.php';

$user_table = new UsersTable;

if ($user = $user_table->get('46c0aea4e1914c8197050f8fb76cbb40')) {
    print_pre($user);
} else {
    trigger_error('Failed to load user. Change the key.');
}

require_once dirname(dirname(__FILE__)).'/config-common-footer.php';
