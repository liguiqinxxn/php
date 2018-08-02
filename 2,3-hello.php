<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="color: <?php echo  'green'; ?>">
html:hello!! <br><br>
<?php
    echo "php: hi!!. <br><br>";
    /*
     * zhushi
     * zhushi
     * zhushi
     * */
?>
<!--html:Are you ok?<br><br>-->
<?php
    echo "php: I'm fine,thank you,and you?<br><br>";
?>
<!--html:你怎么带了一个分号尾巴啊？<br><br>-->
<?php
    echo "php:PHP语句都必须以一个分号（;）结束<br><br>";
    echo "php: 不写这个分号可能会出错<br><br>";
?>
</body>
<script>
    alert('<?php echo "php中的js"; ?>');
</script>
</html>