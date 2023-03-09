<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7b729090bb.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/AW/css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="warp">
        <img id="bar" src="/AW/img/상단바이미지.png" alt="">
        <img id="main" src="/AW/img/accessories_hero_imac_hw__cpvb2y3r05ua_large.png" alt="">
        <div id="bot">
            <img src="/AW/img/패드.png" alt="">
            <img src="/AW/img/키보드.png" alt="">
            <img src="/AW/img/매직마우스.png" alt="">
        </div>
        <header>
    <a href="/AW/index.php">
        <div class="logo">
        <h1>AW</h1>
        </div>
    </a>
    <img src="/AW/img/AW.png" alt="" class="aw">
    <div id="loginlogo">
    <?php
            if(isset($_SESSION['userid'])){
        ?>
        <div>
            <span><?=$_SESSION['userid']?>님</span>
            <a href="/AW/process/logout_process.php"><img class ="loginlogo" src="/AW/img/음표.jpg" alt="">
                <div id= "startaw"><button><span>Logout</span></button></div>
            </a>
        </div>
        <?php       
            }else{
        ?>
        <a  href="/AW/member/login.php"><img class ="loginlogo"src="/AW/img/음표없음.jpg" alt="">
            <div id= "endaw"><button><span>Login</span></button></div>
        </a>
        
        <?php
            }
        ?>

       
    </div>
</header>