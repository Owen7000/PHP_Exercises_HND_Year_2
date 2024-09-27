<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental Concepts Task 7</title>
</head>
<body>
    <?php 
        $message = "It is great fun learning how to program using PHP!";

        echo "
            <p>
                The message is $message<br>
                There are " . strlen($message) . " characers in the message<br>
                There are " . str_word_count($message) . " words in the message<br>"
                . strtoupper($message) ."<br>
                The word program is at position " . strpos($message, "program") . " in the message<br>" .
                str_replace("great", "massive", $message) . "
            </p>
        ";
    ?>
</body>
</html>