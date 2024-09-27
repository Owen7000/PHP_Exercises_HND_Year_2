<!DOCTYPE html>
<html>
    <head>
        <title>Basic Syntax</title>
    </head>
   
    <body>
        <?php
            //* Follow good coding standards
            $total = 50; // Total Cost
            $postage = 2.95; // Cost for postage
            $discount = 0.9; // 10% discount
            $totalAmount = 0.0;
 
            $totalAmount = ($totalAmount * $discount) + $postage;
            $totalAmount = round($totalAmount, 2);
           
            echo "<p>The total is &pound;$totalAmount</p>\n";
 
            echo '<ul>';
            echo '<li>Hello, World</li>';
            echo "<li>Hello, World</li>";
            echo "<li>How's things?</li>";
            echo '<li>How\'s things?</li>'; //? Escape Character
            echo '</ul>';
 
            echo '<p>You can create valid HTML in PHP <br> if you code correctly</p>';

            $fileName = $_SERVER['SCRIPT_NAME'];
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $softServe = $_SERVER['SERVER_SOFTWARE'];

            echo "<p>Filename: $fileName</p>\n";
            echo "<p>User Agent: $userAgent</p>\n";
            echo "<p>Server Software: $softServe</p>\n";

            $firstName = "Owen";
            $lastName = "Plimer";
            $fullName = $firstName . ' ' . $lastName;

            echo "<p>This script was written by: $fullName</p>\n";

            echo "<p>The $fullName is " . strlen($fullName) . " characters long</p>\n"
        ?>
 
        <p>
            This is an HTML paragraph
        </p>
    </body>
</html>