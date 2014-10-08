<?php

namespace Controller;

class LoginController
{
    public function defaultAction()
    {
        $this->loginAction();
    }

    public function loginAction()
    {
        echo "This is Login page";
    }

    public function logoutAction()
    {
        echo "This is logout page";
    }

    public function registerAction()
    {
        echo "This is register page";
    }
}