<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Smoothie</title>
</head>
<body>
    <em>Your Smoothie</em>

    <?php 
        echo "<p>You chose a " . $_GET['size'] . " smoothie with " . $_GET['fruit1'] . " " . $_GET['fruit2'] . " " . $_GET['fruit3'] . "</p>";
        echo "<p>You have chosen " . $_GET['paymentMethod'] . " payment method.</p>";
    ?>
</body>