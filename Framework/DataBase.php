<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/18
 * Time: 下午5:42
 */

define("MYSQL_HOST", "127.0.0.1");
define("MYSQL_PORT", "3306");
define("MYSQL_USER", "root");
define("MYSQL_PASS", "");
define("MYSQL_DBNAME", "0503");




function queryBySql($sql){
    mysql_connect(MYSQL_HOST.":".MYSQL_PORT, MYSQL_USER, MYSQL_PASS);
    mysql_select_db(MYSQL_DBNAME);
    mysql_query("set names utf8");
    $result = mysql_query($sql);
    $resultArr = array();
    while ($row = mysql_fetch_assoc($result)){
        array_push($resultArr, $row);
    }
    mysql_free_result($result);
    mysql_close();
    return $resultArr;
}

