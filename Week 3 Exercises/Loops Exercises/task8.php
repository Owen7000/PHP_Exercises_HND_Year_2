<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Task 8</title>
</head>

<body>
    <?php 
        $target = 12;
        $start = 0;
        $tableNumber = 10; // 10 because it's the 10 times table

        for ($number = $start; $number <= $target; $number++) {
            echo "<p>$tableNumber x $number = " . $tableNumber * $number ."</p>";

        }
    ?>
</body>
</html>