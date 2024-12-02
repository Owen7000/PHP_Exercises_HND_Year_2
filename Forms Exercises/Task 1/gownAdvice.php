<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduation Gown</title>
</head>
<body>
    <em>Graduation Gown Advice</em>

    <?php 
        if ($_GET['height'] < 165) {
            echo "You need a standard gown.";
        } else {
            echo "You need a tall gown.";
        }
    ?>
</body>