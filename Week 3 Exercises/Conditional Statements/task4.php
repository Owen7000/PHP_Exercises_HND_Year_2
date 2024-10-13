<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 4</title>
</head>
<body>
    <?php 
        $today = date("D");
        $yesterday = date("D",strtotime("yesterday"));
        $tomorrow =  date("D",strtotime("tomorrow"));

        echo "<p>This program is being executed on $today<br>Tomorrow will be $tomorrow and yesterday was $yesterday.</p>";

        if ($today == "Fri") {
            echo "<p>Have a nice weekend</p>";
        } else if ($today == "Mon"){
            echo "<p>Have a nice week</p>";
        } else {
            echo "<p>Have a nice day</p>";
        }
    ?>
</body>
</html>