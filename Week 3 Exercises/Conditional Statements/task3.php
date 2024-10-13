<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 3</title>
</head>
<body>
    <?php 
        function sendMessage($age, $name) {
            echo "<p>Hello, $name. You are $age.<br>";
            if ($age <= 17) {
                echo "You are young = do your best at school!";
            } else if ($age >=18 and $age <= 25) {
                echo "Hope you find a rewarding career!";
            } else if ($age >= 26 and $age <= 59) {
                echo "Hope you are doing well in your career?";
            } else if ($age >= 60) {
                echo "Are you looking forward to retirement?";
            }

            echo "</p>";
        }

        $person1 = Array("Person 1", 17);
        $person2 = Array("Person 2", 18);
        $person3 = Array("Person 3", 25);
        $person4 = Array("Person 4", 26);
        $person5 = Array("Person 5", 59);
        $person6 = Array("Person 6", 60);

        sendMessage($person1[1], $person1[0]);
        sendMessage($person2[1], $person2[0]);
        sendMessage($person3[1], $person3[0]);
        sendMessage($person4[1], $person4[0]);
        sendMessage($person5[1], $person5[0]);
        sendMessage($person6[1], $person6[0]);
    ?>
</body>
</html>