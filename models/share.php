<?php
/**
 * Created by PhpStorm.
 * User: Dragoljub
 * Date: 8/17/2018
 * Time: 3:33 PM
 */

class ShareModel extends Model{

    public function Index(){
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        return($rows);
    }

}