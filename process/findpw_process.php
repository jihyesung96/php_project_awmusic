<?php
    $conn = mysqli_connect("localhost","root","1234","AW");
    $sql = "select * from user where userid ='{$_POST['id']}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        //연락처 체크하기
        if($row["usertel"]==$_POST["tel"]){
            ?>
            <script>
                //비밀번호 수정하기 페이지로 이동
                alert("아이디와 연락처가 확인되셧습니다.")
                location.href="../member/editpw.php?id=<?=$row['userid']?>";
            </script>
            <?php
        }else{
            ?>
            <script>
                //연락처를 확인해주세요 경고장 출력
                alert("연락처를 확인해 주세요.");
                history.back();
            </script>
            <?php
        }
    }
    else{
    ?>
        <script>
            //이름을 확인해 주세요 경고장 출력
            alert("아이디을 확인해 주세요.");
            history.back();
        </script>
    <?php
    }
    