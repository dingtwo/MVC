<?php
/**
 * Created by PhpStorm.
 * User: dingjz
 * Date: 16/9/19
 * Time: 上午10:51
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul>li{
            list-style:none;
            float: left;
            width: 200px;
            height: 200px;
            background-color: plum;
            margin:5px;;
            text-align: center;
            line-height: 200px;
        }
    </style>
</head>
<body>
    <h2>这是所有的列表</h2>
    <ul>
        <?php
        require "Model/content.php";
        $result = selectAll();
        foreach ($result as $li){
            echo "<li>";
            echo "<a href=http://localhost/0503/MVC/detail/show/{$li['id']}>{$li['username']}</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>
