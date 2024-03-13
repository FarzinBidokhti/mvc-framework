<?php

namespace app\Models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $confirm_password;

    public function register()
    {
        echo "creating new user";
    }
}
