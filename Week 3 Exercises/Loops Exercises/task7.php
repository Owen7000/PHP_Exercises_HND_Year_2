<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Task 7</title>
</head>
<body>
    <?php 
        $target = 20;
        $start = 1;

        for ($number = $start; $number <= $target; $number++) {
            if ($number % 2 != 0) {
                echo "<p>$number</p>\n";
            } 
        }
    ?>
</body>
</html>