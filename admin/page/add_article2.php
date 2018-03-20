<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/19
 * Time: 11:35
 */
header("Content-Type: text/html;charset=utf-8");
include '../common/common.php';
$article_name = $_POST['article_name'];
$article_content = $_POST['article_content'];

//连接数据库
$mysqli = @new mysqli("localhost", "blog", "blog", "blog", 3306);
if ($mysqli->connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
//-----连接数据库

//设置字符集
mysqli_set_charset($mysqli, "utf8");

$sql = "INSERT INTO article (article_name,article_content,article_type) VALUES ('$article_name','$article_content', 1)";

if ($mysqli->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
