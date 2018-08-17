<?php
/**
 * Created by PhpStorm.
 * User: Dragoljub
 * Date: 8/17/2018
 * Time: 2:18 PM
 */

//Include Config

require ('config.php');
require ('classes/Bootstrap.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require ('controllers/home.php');
require ('controllers/shares.php');
require ('controllers/users.php');

require ('models/home.php');
require ('models/share.php');
require ('models/user.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller){
    $controller->executeAction();
}