<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/19
 * Time: 上午10:13
 */

function show($id){
    require "Model/content.php";
    $result = selectItemById($id);
    require "View/detail.php";
}