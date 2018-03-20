<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/18
 * Time: 22:03
 */
header("Content-Type: text/html;charset=utf-8");
//连接数据库
$mysqli = @new mysqli("localhost", "blog", "blog", "blog", 3306);
if ($mysqli->connect_error) {
    die("很抱歉，这是我们的错误,请稍后再试！");
}
mysqli_set_charset($mysqli, "utf8");
//-----连接数据库
$sql = "SELECT * FROM article WHERE article_id < 11";
$result = $mysqli->query($sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>韩亚振的个人博客</title>

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

    <link href="../css/index.css" rel="stylesheet">

</head>
<body>
<div class="list-group">
    <?php

    if ($result->num_rows > 0) {
        // 输出每行数据
        while ($row = $result->fetch_assoc()) {
            print <<<EOT
    <a href="#" onclick="to_article({$row['article_id']})" class="list-group-item">
        <h3>{$row['article_name']}</h3>
        <div id="list_item_bottom">
            <!-- 分类 -->
            <!--<span>IT</span>-->
            <!-- 发布时间 -->
            <time>{$row['article_time']}</time>
        </div>
    </a>
EOT;
        }
    }
    $mysqli->close();
    ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../common/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../common/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script src="../js/index.js"></script>


</body>
</html>