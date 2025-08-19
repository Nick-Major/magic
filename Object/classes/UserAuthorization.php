<?php
declare(strict_types=1);

namespace Object\classes;

use Object\traits\AppUserAuthentication;
use Object\traits\MobileUserAuthentication;

class UserAuthorization
{
    use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as mobileAuthenticate;
    }

    public function authorization(string $login, string $password): string {
        if ($this->authenticate($login, $password)) {
            return "Авторизация прошла успешно!";
        } elseif ($this->mobileAuthenticate($login, $password)) {
            return "Авторизация в мобильном приложении прошла успешно!";
        } else {
            return "Ошибка авторизации!";
        }
    }
}
