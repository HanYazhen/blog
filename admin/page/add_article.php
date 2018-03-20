<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/18
 * Time: 22:03
 */
header("Content-Type: text/html;charset=utf-8");
include '../common/common.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>添加---博客</title>

    <!-- bootstrap -->
    <link href="../common/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../common/jquery-3.3.1.min.js"></script>

    <!-- 注意， 只需要引用 JS，无需引用任何 CSS ！！！-->
    <script type="text/javascript" src="../common/wangEditor/wangEditor.min.js"></script>

    <!-- 引入公共CSS -->
    <link href="../common/common.css" rel="stylesheet">

    <link href="../css/add_article.css" rel="stylesheet">

</head>
<body>

<!--标题-->
<input id="article_name" type="text" class="form-control" placeholder="在此输入文章标题">

<!--编辑区-->
<div id="editor"></div>

<script type="text/javascript">
    var E = window.wangEditor;
    var editor = new E('#editor');
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.create()
</script>

<button id="submit_button" type="button" class="btn btn-success">提交</button>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../common/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script src="../js/add_article.js"></script>

</body>
</html>