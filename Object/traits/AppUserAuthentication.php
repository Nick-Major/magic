<?php
declare(strict_types=1);

namespace Object\traits;

trait AppUserAuthentication {
    protected string $appLogin = 'appLogin';
    protected string $appPassword = 'app12345';

    public function authenticate(string $userLogin, string $userPassword): bool {
        return $userLogin === $this->appLogin && $userPassword === $this->appPassword;
    }
}
