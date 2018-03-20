<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/19
 * Time: 13:28
 */
header("Content-Type: text/html;charset=utf-8");
$article_id = $_GET['article_id'];

//连接数据库
$mysqli = @new mysqli("localhost", "blog", "blog", "blog", 3306);
if ($mysqli->connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
//-----连接数据库

//设置字符集
mysqli_set_charset($mysqli, "utf8");

$sql = "SELECT * FROM article WHERE article_id = $article_id";

$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>
        <?php
        echo "{$row['article_name']}";
        ?>
    </title>

    <!-- bootstrap -->
    <link href="../common/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- 引入公共CSS -->
    <link href="../common/common.css" rel="stylesheet">

    <link href="../css/visitor.css" rel="stylesheet">


</head>
<body>

<h2 id="article_name" class="text-center">
    <?php
    echo "{$row['article_name']}";
    ?>
</h2>

<div id="article_content">
    <?php
    echo "{$row['article_content']}";
    ?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../common/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../common/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<?php
$mysqli->close();
?>


</body>
</html>