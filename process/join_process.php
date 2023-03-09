<?php 
    if(!$_POST["firstname"] or !$_POST["lastname"] or !$_POST["userid"]){
        ?>
        <script>
                alert("빈칸을 입력하세요.");
                location.replace("../member/join.php");
            </script>
        <?php
    }else{
        $conn = mysqli_connect("localhost","root","1234","AW");
    $userid =$_POST["userid"];
    $sql = "select * from user where userid = '{$userid}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        ?>
        <script>
                alert("중복된 아이디 입니다.");
                location.replace("../member/join.php");
            </script>
        <?php
    }else{
            //패스워드랑 패스워드체크가 일치하는 확인
        if($_POST["userpw"] == $_POST["userpwch"]){
            if(!$_POST["userpw"]){
                ?>
                <script>
                    alert("Password를 입력하세요.");
                    location.replace("../member/join.php");
                </script>
                <?php
            }elseif(strlen($_POST["userpw"])<8){
                ?>
                <script>
                    alert("Password를 8자리 이상 입력하세요.");
                    location.replace("../member/join.php");
                </script>
                <?php
            }elseif(!preg_match("/[\~\!\@\#\$\%\^\&\*]/u",$_POST["userpw"])){
                ?>
                <script>
                    alert("특수문자를 하나이상 입력하세요.");
                    location.replace("../member/join.php");
                </script>
                <?php
            }elseif(!preg_match("/^\d{11}$/u",$_POST["usertel"])){
                ?>
                <script>
                    alert("전화번호 형식을 확인하세요.");
                    location.replace("../member/join.php");
                </script>
                <?php
            }else{
                $sql1 = "insert into user(firstname,lastname,userid,userpw,userpwch,usertel)
                values('{$_POST['firstname']}','{$_POST['lastname']}'
                ,'{$_POST['userid']}','{$_POST['userpw']}','{$_POST['userpwch']}','{$_POST['usertel']}')";
                $result1 = mysqli_query($conn, $sql1);
                if($result1){
                ?>
                <script>
                    alert("회원가입 되셧습니다.");
                    location.replace("../member/login.php");
                </script>
                <?php
                }else {
                    echo "실패";
                } 
            }

            
        }
        else {
    ?>
    <script>
        alert("비밀번호 체크가 일치하지 않습니다.");
        location.replace("../member/join.php");
    </script>
    <?php
            }
        }
    }
    

?>