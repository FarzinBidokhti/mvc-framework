<?php

namespace app\Models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';
    public string $confirm_password = '';

    public function register()
    {
        echo "creating new user";
    }

    public function rule(): array
    {
        return [
            'first_name'       => [self::RULE_REQUIRED],
            'last_name'        => [self::RULE_REQUIRED],
            'email'            => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password'         => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirm_password' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }
}
