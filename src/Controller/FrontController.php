<?php
namespace Controller;

class FrontController
{
    private function methodNotFound()
    {
        echo "Method not found";
    }

    private  function controllerNotFound()
    {
        echo "Controller not exist";
    }

    private function getControllerName($input)
    {
        $name = 'Main';
        if (isset($input['c'])) {
            $name = ucfirst(strtolower($input['c']));
        }

        return __NAMESPACE__ . "\\" . $name . 'Controller';
    }

    private function getActionName($input)
    {
        $name = 'default';
        if (isset($input['a'])) {
            $name = strtolower($input['a']);
        }
        return $name.'Action';
    }

    public function handlerAction($input)
    {
        $controller = $this->getControllerName($input);
            if(class_exists($controller)) {
                $obj = new $controller;
                $action = $this->getActionName($input);
                    if (method_exists($obj, $action) === true) {
                        $obj->$action();
                    } else {
                        $this->methodNotFound();
                    }
            } else {
                $this->controllerNotFound();
            }
    }
}
