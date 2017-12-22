<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<script>
    var aa = 'bb';

    var obj = {
        name: 'lisi'
    };

//    alert(window['aa']);
    var key = 'name';
    alert(obj[key]);
</script>

<?php
//    $GLOBALS['aa'] = 'bb';
    $aa = 'bb';

    echo $GLOBALS['aa'];
?>
</body>
</html>