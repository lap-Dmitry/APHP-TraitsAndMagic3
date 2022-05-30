<?php

include_once './autoload.php';

use Traits\Users\Users;

$users = new Users();
$users->authenticate('Олег', '1111');
$users->MobileAuthenticate('Иван', '2222');