<?php

require_once 'config.php';

class UsersDatabaseConnection extends \attitude\Storage\DatabaseConnection {}
class UsersTable extends \attitude\Storage\DatabaseStorage\TableStorage\DocumentStorage {}

$user_table = new UsersTable;

var_dump($user_table->store(array(
    'first_name' => 'Martin',
    'last_name'  => 'Adamko',
    'user_name'  => 'martin_adamko'
)));

var_dump($user_table->store(array(
    'first_name' => 'Milan',
    'last_name'  => 'Lasica',
    'user_name'  => 'milan_lasica'
)));

var_dump($user_table->store(array(
    'first_name' => 'Ján',
    'last_name'  => 'Króner',
    'user_name'  => 'jan_kroner'
)));

require_once dirname(dirname(__FILE__)).'/config-common-footer.php';
