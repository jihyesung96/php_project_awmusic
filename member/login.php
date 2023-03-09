<?php 
    include_once "../include/header.php";
?>
    
            <div id="user">
                <div id="login">
                <h1>Always With</h1>
                    <p>Sign in with your AW ID</p>
                    <form action="../process/login_process.php" method="post">
                        <p> <input type="text" name="id" placeholder=" AW ID"></p>
                        <p> <input type="password" name="pw" placeholder=" PASSWORD"></p>
                        <button id="loginbutton"  type="submit" >LOGIN</button>
                    </form>
                </div>
                <div id="member">
                    <a href="join.php">Create New AW ID
                        <div></div>
                    </a>
                    <a href="find.php">Forgot AW ID or Password? 
                        <div></div>
                    </a>
                </div>
            </div>
        </div>
        
<?php 
    include_once "../include/footer.php";
?>
