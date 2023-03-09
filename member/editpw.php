<?php 
    include_once "../include/header.php";
?>
<div id="edit">
    <h2>PASSWORD 변경</h2>
    <form action="../process/editpw_process.php" method="post">
        <input type="hidden" value="<?=$_GET['id']?>" name="userid">
        <p><input type="password" name="userpw" placeholder="PASSWORD"></p>
        <p><input type="password" name="userpwch" placeholder="PASSWORD CHECK"></p>
        <p>
            <button type="submit">변경</button>
            <button type="reset">취소</button>
        </p>
    </form>
</div>
<?php 
    include_once "../include/footer.php";
?>