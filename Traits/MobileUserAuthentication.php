<?php
declare(strict_types=1);

namespace Traits;

trait MobileUserAuthentication {
    private string $loginMobile = 'Иван';
    private string $passwordMobile = '2222';

    public function authenticate(string $userName, string $userPassword) {
        if ($this->loginMobile === $userName && $this->passwordMobile === $userPassword) {
            echo $this->loginMobile . ' пользователь мобильного приложения' .'<br>' .'<br>';
        } else {
            echo 'Введён неправильный логин/пароль мобильного приложения'. '<br>'. 'Введите новые значения';
        }
    }
}