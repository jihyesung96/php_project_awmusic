<?php
    if($_POST["userpw"]==$_POST["userpwch"]){
        //패스워드 암호화 시키기
        $conn = mysqli_connect("localhost","root","1234","AW");
        $sql = "update user
        set userpw ='{$_POST["userpw"]}', userpwch ='{$_POST["userpwch"]}'
        where userid ='{$_POST["userid"]}'";
        $result = mysqli_query($conn,$sql);
        if($result){
            ?>
            <script>
                //패스워드가 변경되었습니다.
                alert("패스워드가 변경되었습니다.");
                location.href="../member/login.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                //패스워드 변경에 문제가 생겼습니다.
                alert("패스워드 변경에 문제가 생겼습니다.");
                history.back();
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("패스워드와 패스워드체크가 일치하지 않습니다.");
            history.back();
        </script>
        <?php
    }
?>