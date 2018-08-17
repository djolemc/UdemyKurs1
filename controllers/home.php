<?php
/**
 * Created by PhpStorm.
 * User: Dragoljub
 * Date: 8/17/2018
 * Time: 3:06 PM
 */

class Home extends Controller{

    protected function Index(){
        $viewmodel=new HomeModel();
        $this->ReturnView($viewmodel->Index(),true);
    }
}