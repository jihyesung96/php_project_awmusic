<?php 
    include_once "../include/header.php";
?>
<div id="find">
    <div id = "findid">
        <h3>AW ID find </h3>
        <form action="../process/findid_process.php" method="post">
            <p><input type="text" name="firstname" placeholder="Firstname"></p>
            <p><input type="text" name="lastname" placeholder="Lastname"></p>
            <p><input type="text" name="tel" placeholder="Tel"></p>
            <p>
                <button type="submit">FIND</button>
                <button type="reset">CANCLE</button>
            </p>
        </form>
    </div>
    <div id ="findpassword">
        <h3>AW PASSWORD find</h3>
        <form class = "findpassword" action="../process/findpw_process.php" method="post">
            <p><input type="text" name="id" placeholder="Id"></p>
            <p><input type="text" name="tel" placeholder="Tel"></p>
            <p>
                <button type="submit">FIND</button>
                <button type="reset">CANCLE</button>
            </p>
        </form>
    </div>
</div>
<?php 
    include_once "../include/footer.php";
?>