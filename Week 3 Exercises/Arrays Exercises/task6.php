<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - Task 6</title>
</head>
<body>
    <?php 
        $numbers = array(12, 23, 9, 54, 19, 21, 17, 3, 99, 32, 33);
        $length = count($numbers);
        $total = 0;

        echo "<p>The array is: $length elements long.</p>\n";

        foreach ($numbers as $number) {
            echo "<p>$number</p>\n";
            $total += $number;
        }

        echo "<p>The total of all elements is: $total</p>\n";
        echo "<p>The average of the array is: " . $total/$length . "</p>\n";
    ?>  
</body>
</html>