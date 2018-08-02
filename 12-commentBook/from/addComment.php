<?php
/**
 * Created by PhpStorm.
 * User: liguiqin
 * Date: 2018/7/28
 * Time: 17:22
 */
$username = $_POST['username'];
$content = $_POST['content'];

if ($username == '' || $content == ''){
    echo '用户名或评论内容不能为空，<a href="commentBook.php">返回评论区</a>';
}else{
    $comment = array('username' =>$username,'content' =>$content);

    $filePath = 'commentBook.txt';
    //unserialize() 函数用于将通过 serialize() 函数序列化后的对象或数组进行反序列化，并返回原始的对象结构。
    $commentList = unserialize(file_get_contents($filePath));

    if (is_array($commentList)){
        //函数用于向数组插入新元素。新数组的值将被插入到数组的开头。
        array_unshift($commentList,$comment);
        //$array,必需，规定数组。
    }else{
        $commentList = [$comment];
    }

    $commentFile = fopen($filePath,'w');
    //serialize() 函数用于序列化对象或数组，并返回一个字符串。
    fwrite($commentFile,serialize($commentList));
    fclose($commentFile);

    echo '评论成功，<a href="commentBook.php">返回评论区</a>';
}
/*
     * fopen() 函数打开一个文件或 URL
     * 语法:
     * fopen(filename,mode,include_path,context)
     *必需。规定您请求到该文件/流的访问类型。
     * mode
     * 可能的值：
     * "r" （只读方式打开，将文件指针指向文件头）
     * "r+" （读写方式打开，将文件指针指向文件头）
     * "w" （写入方式打开，清除文件内容，如果文件不存在则尝试创建之）
     * "w+" （读写方式打开，清除文件内容，如果文件不存在则尝试创建之）
     * "a" （写入方式打开，将文件指针指向文件末尾进行写入，如果文件不存在则尝试创建之）
     * "a+" （读写方式打开，通过将文件指针指向文件末尾进行写入来保存文件内容）
     * "x" （创建一个新的文件并以写入方式打开，如果文件已存在则返回 FALSE 和一个错误）
     * "x+" （创建一个新的文件并以读写方式打开，如果文件已存在则返回 FALSE 和一个错误）
     * */
/*
 * fwrite() 函数将内容写入一个打开的文件中。
 * 语法:
 * fwrite(file,string,length)
 * file	必需。规定要写入的打开文件。
 * string	必需。规定要写入打开文件的字符串。
 * length	可选。规定要写入的最大字节数。
 * */
/*
 * file_get_contents() 把整个文件读入一个字符串中
 * 语法：
 * file_get_contents(path,include_path,context,start,max_length)
 * path：必需。规定要读取的文件。
 * include_path	：可选。如果您还想在 include_path（在 php.ini 中）中搜索文件的话，请设置该参数为 '1'。
 * context	可选。规定文件句柄的环境。context 是一套可以修改流的行为的选项。若使用 NULL，则忽略。
 * start	可选。规定在文件中开始读取的位置。该参数是 PHP 5.1 中新增的。
 * max_length	可选。规定读取的字节数。该参数是 PHP 5.1 中新增的。
*/