<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="server.php" method="post">
    <p>* 必填字段</p>
    <p>
        姓名：<input type="text" id="username" name="username"> *
        <span id="err"></span>
        <?php
            //$err = $_GET['err'];
            /*if(isset(  $_GET['err']  )){
                echo '请输入用户名.';
            }*/
        ?>
    </p>
    <p>
        电邮：<input type="text" id="email" name="email"> *
    </p>
    <p>
        网址：<input type="text" id="url" name="url">
    </p>
    <p>
        评论：<textarea id="comment" cols="30" rows="10" name="comment"></textarea>
    </p>
    <p>
        性别：<input type="radio" name="sex" value="男">男 <input type="radio" name="sex" value="女">女
    </p>
    <p>
        爱好：<input type="checkbox" name="hobby[]" value="sing">唱歌 <input type="checkbox" name="hobby[]" value="dance">跳舞
    </p>
    <p>
        <input type="submit" value="提交">
    </p>
</form>
<script src="jquery-1.9.1.min.js"></script>
<script>
    $(function () {
        $('#username').on('blur', function () {
            //$.get(url, data, callback, type);
            $.get('server.php', {uname: this.value}, function(res){
                /*if(res == 'success'){
                    $('#err').html('勾');
                }else{
                    $('#err').html('用户已存在');
                }*/
                console.log(res.name);
            }, 'json');
            //'text': "{"name":"lisi","age":23,"sex":"\u7537"}"
            //'json': {"name":"lisi","age":23,"sex":"\u7537"}
        });
    });
</script>
</body>
</html>