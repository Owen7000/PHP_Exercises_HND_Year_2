<?php 
    session_start();

    if (isset($_SESSION['userLevel'])) 
    {
        if ($_SESSION['userLevel'] != "admin")
        {
            header("Location: noAccess.php");
            exit();
        }
        
    } else 
    {
        header("Location: noAccessLog.php");
        exit();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Admin Page</title>
    </head>

    <body>
        <p>You are viewing the admin page</p>
    </body>
</html>