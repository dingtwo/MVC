<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/18
 * Time: 下午5:38
 */


//处理url
//约定url格式为controllerName/functionName
//print_r($_SERVER);
getRouteInfo($_SERVER["REQUEST_URI"]);
function getRouteInfo($url){
//    $_SERVER["REQUEST_URI"]
    if (preg_match("/^\/0503\/MVC\/\w+\/\w+/", $url)){
        $path = ltrim($url, "/0503/MVC/");
        $arr = explode("/", $path);
//        print_r($arr);
        $files = scandir("./Controller/");
        $fun = $arr[1];
        foreach ($files as $file) {
            if ($arr[0]."Controller.php" == $file){
                require "Controller/".$file;
                if (function_exists($fun)){
                    if (isset($arr[2])){
                        $fun($arr[2]);
                    }else{
                        $fun();
                    }

                    return true;
                }
            }
        }
    }else{
        showError();
        exit();
    }
}

//转向错误页面
function showError(){
    require "error.html";
}

