<?php
/**
 * Created by miaov.com - PHP之旅.
 * User: miaov
 * Details: 
 */
$username = $_POST['username'];
$content = $_POST['content'];

if($username == '' || $content == ''){
    echo '用户名或评论内容不能为空，<a href="commentBook.php">返回评论区</a>';
}else{
    $comment = array('username'=>$username,'content'=>$content);

    $filePath = 'commentBook.txt';
    $commentList = unserialize(file_get_contents($filePath));

    if(is_array($commentList)){
        array_unshift($commentList,$comment);
    }else{
        $commentList = [$comment];
    }

    $commentFile = fopen($filePath,'w');
    fwrite($commentFile,serialize($commentList));
    fclose($commentFile);

    echo '评论成功，<a href="commentBook.php">返回评论区</a>';

}