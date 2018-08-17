<?php
/**
 * Created by PhpStorm.
 * User: Dragoljub
 * Date: 8/17/2018
 * Time: 3:11 PM
 */

class Shares extends Controller{

    protected function Index(){
        $viewmodel=new ShareModel();
        $this->ReturnView($viewmodel->Index(),true);
    }
}