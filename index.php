<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["logdin"]) && $_SESSION["logdin"] === true){
    header("location: work.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>登入介面</title>
    </head>

    <body>
        <div margin-top="170px"; margin-left="170px">
            <p id="image_logo"><img src="image/icon.jpg" margin-top="170px"; margin-left="170px"></p>
            <h1>星海灣管理系統</h1>
            <form method="post" action="login.php">
                帳號：
                <input type="text" name="username"><br/><br/>
                密碼：
                <input type="password" name="password"><br><br>
                <input type="submit" value="登入" name="submit"><br><br>
            </form>
        </div>
    </body>
</html>