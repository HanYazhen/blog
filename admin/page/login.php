<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/19
 * Time: 14:14
 */
header("Content-Type: text/html;charset=utf-8");

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "韩亚振" && $password == "hanyazhen") {
    session_start();
    $_SESSION['uid'] = "hyz";
    header("Location: add_article.php");
} else {
    header("Location: index.php");
}