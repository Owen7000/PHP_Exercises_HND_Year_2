<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION["name"] = "Fiona";
        $_SESSION["userLevel"] = "user";
        header("Location: sessionAccessControlExample.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>
    </head>

    <body>
        <p>Click the button to login with pre-defined user credentials</p>

        <form action="noEffortLogin.php" method="POST">
            <input type="submit" name="submit" value="Login">
        </form>
    </body>
</html>