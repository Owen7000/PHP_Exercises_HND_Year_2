<?php 
    // Safest to declare this now, before we send anything to the browser
    session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tiel of the document</title>
    </head>

    <body>
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                session_unset();
                session_destroy();

                echo '<p>Logged out</p>';
            } 
            else 
            {
                $uName = $_SESSION['name'];
                $logStat = $_SESSION['userLevel'];

                echo "<p>$uName you are logged in as userLevel</p>";
                echo "<p>$logStat</p>";
            }
        ?>

        <a href="accessRestrict.php">Next page</a>

        <form action="sessionAccessControlExample.php" method="POST">
            <input type="submit" name="submit" value="Log Out">
        </form>
    </body>
</html>