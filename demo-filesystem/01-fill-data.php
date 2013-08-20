<?php

require_once 'config.php';

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
print_pre($user);

$user->first_name = 'Janko';
$user->save();

print_pre($user, $user->full_name);

require_once dirname(dirname(__FILE__)).'/config-common-footer.php';
