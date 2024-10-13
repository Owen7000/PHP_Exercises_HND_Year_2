<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 6</title>
</head>
<body>
    <?php 
        /* 
         Use hard coded values for now
         Will be changed in future to accept input from user at run-time 
        */

        function showGrade($mark, $name) {
            $grade = "";

            if ($mark <= 49) { // Fail
                $grade = "Fail";
            } else if ($mark <= 59) { // C
                $grade = "C";
            } else if ($mark <= 69) { // B
                $grade = "B";
            } else if ($mark <= 79) { // A
                $grade = "A";
            } else if ($mark >= 80) { // A with Distinction
                $grade = "A with distinction";
            }

            echo "<p>The student: $name, got $mark marks in the exam. This means that their grade is: $grade.</p>";
        }

        showGrade(0, "Person 1");
        showGrade(49, "Person 2");
        showGrade(50, "Person 3");
        showGrade(59, "Person 4");
        showGrade(60, "Person 5");
        showGrade(69, "Person 6");
        showGrade(70, "Person 7");
        showGrade(79, "Person 8");
        showGrade(80, "Person 9");
    ?>
</body>
</html>