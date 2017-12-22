<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post" id="myform">
        <p>
            用户名：<input type="text" name="username" id="username">
        </p>
        <p>
            密码：<input type="password" name="pwd">
        </p>
        <p>
            <input type="submit" value="确定" id="btn-submit">
        </p>
    </form>
    <script>

        var oUsername = document.getElementById('username');

        var oMyform = document.getElementById('myform');
        oMyform.onsubmit = function () {
            if(oUsername.value == ""){
                alert('请输入用户名哇!');
                return false;
            }
            return true;
        };


        /*var oSubmit = document.getElementById('btn-submit');
        oSubmit.onclick = function (e) {
            if(oUsername.value == ""){
                alert('请输入用户名哇!');
                e.preventDefault();
            }
        };*/







    </script>
</body>
</html>