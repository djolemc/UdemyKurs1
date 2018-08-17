<?php
/**
 * Created by PhpStorm.
 * User: Dragoljub
 * Date: 8/17/2018
 * Time: 2:20 PM
 */

class Bootstrap{
        private $controller;
        private $action;
        private $request;

        public function __construct($request){

            $this->request=$request;

            if($this->request['controller']=="") {
                $this->controller='home';
            } else {
                $this->controller = $this->request['controller'];
            }

            if($this->request['action']==""){
                $this->action='index';
            } else {
                $this->action = $this->$request['action'];
            }
        }

    /**
     * @return mixed
     */
    public function createController(){
        //check Class
        if(class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            //Check Extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                } else {
                    //Method does not exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
                } else {
                    //Base Controller Does not Exist
                    echo '<h1>Base controller not found</h1>';
                    return;
                }
            } else {
                echo '<h1>Controller class does not exist</h1>';
                    return;


        }
    }

}