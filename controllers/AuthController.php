<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\Models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return $this->render('register', ['model' => $registerModel]);
            }

            echo '<pre>';
            var_dump($registerModel->errors);
            echo '</pre>';
            exit();
        }

        $this->setLayout('auth');
        return $this->render('register', ['model' => $registerModel]);
    }
}
