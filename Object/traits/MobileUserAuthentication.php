<?php
declare(strict_types=1);

namespace Object\traits;

trait MobileUserAuthentication {
    protected string $mobileLogin = 'mobileLogin';
    protected string $mobilePassword = 'mobile12345';

    public function authenticate(string $userLogin, string $userPassword): bool {
        return $userLogin === $this->mobileLogin && $userPassword === $this->mobilePassword;
    }
}