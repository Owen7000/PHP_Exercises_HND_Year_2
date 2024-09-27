<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental Concepts Task 5</title>
</head>
<body>
    <?php 
        $unitCost = 12.65; // The cost of a single unit
        $vatPercentage = 20; // 20% VAT added to unit cost
        $deliveryCharge = 6.50; // Flat rate


        $quantity = 1;
        $calculatedVAT = ($unitCost * $quantity) * ($vatPercentage/100);


        echo "
            <p>
                The unit cost for 1 item is £" . $unitCost * $quantity ."<br>
                The VAT is £$calculatedVAT<br>
                The delivery charge is £$deliveryCharge<br>
                The total cost is £" . ($unitCost * $quantity + $calculatedVAT + $deliveryCharge) . "
            </p><hr>
        ";

        $quantity = 5;
        $calculatedVAT = ($unitCost * $quantity) * ($vatPercentage/100);


        echo "
            <p>
                The unit cost for 5 item is £" . $unitCost * $quantity ."<br>
                The VAT is £$calculatedVAT<br>
                The delivery charge is £$deliveryCharge<br>
                The total cost is £" . ($unitCost * $quantity + $calculatedVAT + $deliveryCharge) . "
            </p><hr>
        ";

        $quantity = 15;
        $calculatedVAT = ($unitCost * $quantity) * ($vatPercentage/100);


        echo "
            <p>
                The unit cost for 15 item is £" . $unitCost * $quantity ."<br>
                The VAT is £$calculatedVAT<br>
                The delivery charge is £$deliveryCharge<br>
                The total cost is £" . ($unitCost * $quantity + $calculatedVAT + $deliveryCharge) . "
            </p><hr>
        ";
    ?>
</body>
</html>