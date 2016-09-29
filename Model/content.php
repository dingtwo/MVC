<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/19
 * Time: 上午10:51
 */
require "Framework/DataBase.php";

function selectItemById($id){
    $sql = "SELECT * FROM user WHERE id={$id}";

    $result = queryBySql($sql);
    return $result[0];
}

function selectAll(){
    $sql = "SELECT * FROM user";
    return queryBySql($sql);
}