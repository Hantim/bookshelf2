<?php

namespace Controller;

class MainController
{
    public function defaultAction()
    {
        $this->indexAction();
    }

    public function indexAction()
    {
        echo "Hello World";
    }
}