<?php

require_once 'config.php';

$user = new UserModel('cbc4a6d2f2cc482fb4f0999aa98666cd');
print_pre($user, $user->full_name);

require_once dirname(dirname(__FILE__)).'/config-common-footer.php';
