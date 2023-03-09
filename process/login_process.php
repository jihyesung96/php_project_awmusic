<?php 
    //입력받은 아이디가 있는지 검사
    $conn = mysqli_connect("localhost","root","1234","AW");
    $sql = "select * from user where userid='{$_POST['id']}'";
    $result = mysqli_query($conn, $sql);
    //아이디가 있다면?
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        //비밀번호 일치하는지 체크
        if($row["userpw"]==$_POST["pw"]){
            session_start();
            $_SESSION['userid'] = $_POST["id"];
        }else {
        ?>
        <script>
            alert("비밀번호가 틀렸습니다.");
            history.back();
        </script> 
        <?php
        }
        if(isset($_SESSION['userid'])){
        ?>
            <script>
                alert("로그인되었습니다.");
                location.replace("/AW/index.php");
            </script>
        <?php
        }else {
            echo "세션이 없습니다.";
        }
    }else {
?>
    <script>
        alert("아이디 혹은 비밀번호가 틀렸습니다.");
        history.back();
    </script>        
<?php
}
?>