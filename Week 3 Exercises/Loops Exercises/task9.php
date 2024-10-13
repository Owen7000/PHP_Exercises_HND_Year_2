<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Task 9</title>
</head>

<body>
    <?php 
        $target = 1000;
        $start = 1;

        $total = 0;

        for ($index = $start; $index <= $target; $index++) {
            $total += $index;
        }

        echo "<p>The total of all numbers between $start and $target is: $total</p>";
    ?>
</body>
</html>