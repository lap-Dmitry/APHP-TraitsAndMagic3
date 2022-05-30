<?php
declare(strict_types=1);

namespace Traits;

trait AppUserAuthentication {
    private string $loginApp = 'Олег';
    private string $passwordApp = '1111';

    public function authenticate(string $userName, string $userPassword) {
        if ($this->loginApp === $userName && $this->passwordApp === $userPassword) {
            echo $this->loginApp . ' пользователь приложения'. '<br>';
        } else {
            echo 'Введён неправильный логин/пароль приложения'. '<br>'. 'Введите новые значения'. '<br>';
        }
    }
}