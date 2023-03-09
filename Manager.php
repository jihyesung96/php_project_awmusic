<?php 
    include_once "./include/header.php";
?>
    <div id="user">
                <div id="login">
                <h1>Always With</h1>
                    <p>Manager</p>
                    <form action="./process/Manager_process.php" method="post">
                        <p> <input type="text" name="id" placeholder=" AW ID"></p>
                        <p> <input type="password" name="pw" placeholder=" PASSWORD"></p>
                        <button id="loginbutton"  type="submit" >LOGIN</button>
                    </form>
                </div>
            </div>

<?php 
    include_once "./include/footer.php";
?>