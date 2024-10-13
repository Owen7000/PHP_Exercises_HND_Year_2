<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Task 4</title>
</head>

<body>
    <?php 
        $target = 12;
        $number = 0;
        $tableNumber = 10; // 10 because it's the 10 times table

        while ($number <= $target) {
            echo "<p>$tableNumber x $number = " . $tableNumber * $number ."</p>";

            $number++;
        }
    ?>
</body>
</html>