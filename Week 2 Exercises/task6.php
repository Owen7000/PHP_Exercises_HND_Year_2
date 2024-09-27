<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental Concepts Task 6</title>
</head>
<body>
    <?php 
        $salesTaxRate = 7.5; // Tax rate of 7.5%
        $preTaxTipRate = 16; // Left a pre tax tip of 16%
        $hamburgerPrice = 4.95; // Unit price
        $chocolateMilkPrice = 1.95; // Unit price
        $colaPrice = 0.95; // Unit price

        // Quantity of each
        $hamburgerQuantity = 2;
        $chocolateMilkQuantity = 1;
        $colaQuantity = 1;
        
        // Calculate pre-tax price
        $preTaxCost = ($hamburgerPrice * $hamburgerQuantity) + ($chocolateMilkPrice * $chocolateMilkQuantity) + ($colaPrice * $colaQuantity);
        $preTaxTip = round($preTaxCost * ($preTaxTipRate/100), 2);

        // Calculate total tax cost
        $priceWithTax = $preTaxCost + ($preTaxCost * ($salesTaxRate/100));

        // Calculate total cost - including tip
        $totalCost = round($priceWithTax + $preTaxTip, precision: 2);


        echo "
            <p>
                You had:<hr>
                $hamburgerQuantity Hamburger at £$hamburgerPrice each<br>
                $chocolateMilkQuantity Chocolate Milks at £$chocolateMilkPrice each<br>
                $colaQuantity Colas at £$colaPrice each<br>
                <hr>
                Total Price (pre-tax) | £$preTaxCost<br>
                Tip Percentage (pre-tax) | $preTaxTipRate%<br>
                Tip left | £$preTaxTip<br>
                Tax Percentage | $salesTaxRate%<br>
                <hr>
                Total Order Cost | £$totalCost<br>
                <hr>
            </p>\n
        ";
    ?>
</body>
</html>