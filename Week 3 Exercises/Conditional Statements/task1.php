<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 1</title>
</head>
<body>
    <?php 
        $votingAge = 18;

        $person1Name = "John";
        $person1Age = 19;

        $person2Name = "Mary";
        $person2Age = 17;

        $person3Name = "Laura";
        $person3Age = 18;

        if ($person1Age >= $votingAge) {
            echo "<p>$person1Name is $person1Age and is old enough to vote</p>\n";
        } else {
            echo "<p>$person1Name is $person1Age and is not old enough to vote</p>\n";
        }

        if ($person2Age >= $votingAge) {
            echo "<p>$person2Name is $person2Age and is old enough to vote</p>\n";
        } else {
            echo "<p>$person2Name is $person2Age and is not old enough to vote</p>\n";
        }

        if ($person3Age >= $votingAge) {
            echo "<p>$person3Name is $person3Age and is old enough to vote</p>\n";
        } else {
            echo "<p>$person3Name is $person3Age and is not old enough to vote</p>\n";
        }
    ?>
</body>
</html>