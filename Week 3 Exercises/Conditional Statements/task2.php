<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 2</title>
</head>
<body>
    <?php 
        for ($index = 1; $index <= 5; $index++) {
            if ($index % 2 == 0) {
                echo "<p>$index | Is Even</p>\n";
            } else {
                echo "<p>$index | Is Odd</p>\n";
            }

        }
    ?>
</body>
</html>