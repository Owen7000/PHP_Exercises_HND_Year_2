<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - Task 5</title>
</head>
<body>
    <?php 
        $numbers = array(12, 23, 9, 54, 19, 21, 17, 3, 99, 32, 33);
        $total = 0;

        echo "<p>The array is: " . count($numbers) . " elements long.</p>\n";

        foreach ($numbers as $number) {
            echo "<p>$number</p>\n";
            $total += $number;
        }

        echo "The total of all elements is: $total";
    ?>  
</body>
</html>