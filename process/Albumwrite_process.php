<?php
    $file = $_FILES['album'];
    var_dump($file);
    move_uploaded_file($file['tmp_name'], "../images/{$file['name']}");
    chmod($file, 0777);
    $conn = mysqli_connect("localhost","root","1234","AW");
    $sql = "insert into Album(title,artist,songlist,date,album)
    values('{$_POST['title']}',
    '{$_POST['artist']}',
    '{$_POST['songlist']}',
    '{$_POST['date']}',
    '/AW/images/{$file['name']}')";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "게시글을 작성햇습니다.";
        echo "<img src=../images/{$file['name']} width='100' />";
    }else{
        echo "게시글 작성에 실패했습니다.";
    }
    header("Location:../Album.php");
?>