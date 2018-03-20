$("#submit_button").click(function () {
    var article_name = $("#article_name").val();
    var article_content = editor.txt.html();
    $.ajax({
        url: "../page/add_article2.php",
        data: "article_name=" + article_name + "&" + "article_content=" + article_content,
        type: "POST",
        success: function() {
            window.location.href="../../visitor/page/index.php";
        },
        error: function () {
            alert("失败");
        }
    })
});