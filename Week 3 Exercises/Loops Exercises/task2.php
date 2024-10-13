<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Task 2</title>
</head>
<body>
    <?php 
        $target = 20;
        $number = 1;

        while ($number <= $target) {
            if ($number % 2 == 0) {
                echo "<p>$number | Is Even</p>\n";
            } else {
                echo "<p>$number | Is Odd</p>\n";
            }

            $number++;
        }
    ?>
</body>
</html>