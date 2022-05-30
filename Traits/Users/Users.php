<?php
declare(strict_types=1);

namespace Traits\Users;

use Traits\AppUserAuthentication;
use Traits\MobileUserAuthentication;

class Users
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as MobileAuthenticate;
    }
}