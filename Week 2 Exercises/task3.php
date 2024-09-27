<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental Concepts Task 3</title>
</head>
<body>
    <?php 
        $firstName = "Owen";
        $lastName = "Plimer";
        $weeklySalary = 100; // Decision to use integer to negate the use of the £ sign
        $annualSalary = $weeklySalary * 52;

        echo "<p>My name is $firstName $lastName</p>\n";
        echo "<p>My weekly wage is £$weeklySalary</p>\n";
        echo "<p>My annual salary is £$annualSalary</p>\n";
    ?>
</body>
</html>