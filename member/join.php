<?php 
    include_once "../include/header.php";
?>
<div class="join">
    <h1 id ="join_aw">Always With</h1>
    <h2 onclick="location.href='../index.php'">AW ID 생성</h2>
    <p>하나의 AW ID로 모든 AW 서비스를 이용할 수 있습니다.</p>
    <div>
    <form action="../process/join_process.php" method="post" class="joinuser">
        <p><input type="text" name="firstname" placeholder="First-name">
        <input type="text" name="lastname" placeholder="Last-name"></p>
        <p><input type="text" name="userid" placeholder="AW Id"></p>
        <p><input type="password" name="userpw" placeholder="Password" id="userpw"></p>
        <p><input type="password" name="userpwch" placeholder="Passwordcheck"></p>
        <p><input type="text" name="usertel" placeholder="Tel"></p>
        <p>
            <button type="submit" >Sign In</button><button type="reset">Back</button>
        </p>
    </form>
    </div>
</div>
<?php 
    include_once "../include/footer.php";
?>