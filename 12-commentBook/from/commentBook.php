<!Doctype html>
<html >
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="addComment.php">
    <label>用户名：</label><input type="text" name="username" size="35"><br><br>
    <label>评论内容：</label><textarea rows="10" cols="30" name="content"></textarea><br><br>
    <input type="submit" value="提交"><br><br>
</form>
<?php
    $commentList = unserialize(file_get_contents('http://php.travel.com/12-commentBook/from/commentBook.txt'));
    $totalCount = count($commentList);

    //isset() 函数用于检测变量是否已设置并且非 NULL。
    //intval() 函数用于获取变量的整数值。
    $page = isset($_GET['page'])?intval($_GET['page']):1;
    $limit = isset($_GET['limit'])?intval($_GET['limit']):3;

    $totalPage = ceil($totalCount/$limit);
    if($page<1){
        $page = 1;
    }

    if($page > $totalPage){
        $page = $totalPage;
    }

    $from = ($page-1)*$limit;
    for ($i=$from;$i<$from+$limit;$i++){
        if(isset($commentList[$i])){
            echo '用户名：'.$commentList[$i]['username'].'<br>评论内容：'.$commentList[$i]['content'].'<hr>';
        }else{
            break;
        }
    }

    for ($i=1;$i<$totalPage;$i++){
        echo "<a href='commentBook.php?page=$i&limit=$limit'>$i</a> ";
    }

?>
</body>
</html>