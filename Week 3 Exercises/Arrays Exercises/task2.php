<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - Task 2</title>
</head>
<body>
    <?php 
        $name = array("john", "colin", "mary", "tony", "bryan");

        foreach($name as $key) {
            
            echo "<p>" . strtoupper($key) . "</p>\n";
        }
    ?>  
</body>
</html>