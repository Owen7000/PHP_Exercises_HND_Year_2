<?php
    session_start();
?>

<html>
    <bodY>
        <?php
            //Retrieve Session Data

            if (isset($_SESSION['views']))
            {
                $_SESSION['views'] = $_SESSION['views'] + 1;
            }
            else 
            {
                $_SESSION['views'] = 1;
            }

            echo "Page Views =".$_SESSION['views'];
        ?>
    </bodY>
</html>