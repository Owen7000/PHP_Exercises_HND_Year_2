<?php
    session_start();

    $_SESSION['views'] = 1;
?>

<html>
    <bodY>
        <?php
            //Retrieve Session Data
            echo "Page Views =".$_SESSION['views'];
        ?>
    </bodY>
</html>