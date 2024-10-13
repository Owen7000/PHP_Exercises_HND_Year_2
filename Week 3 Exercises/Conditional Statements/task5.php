<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional - Task 5</title>
</head>
<body>
    <?php 
        function discountPriceAndShow($numBooks, $currentPrice) {
            $discount = 0;

            if ($numBooks <= 3) { // 2% discount
                $discount = 2;
            } else if ($numBooks >= 4 and $numBooks <= 7) { // 3% discount
                $discount = 3;
            } else if ($numBooks >= 8) { // 5% discount
                $discount = 5;
            }

            $discounted_price = round($currentPrice  - ($currentPrice * ($discount / 100)), 2);
            echo "
                <p>
                    You are purchasing: $numBooks books.<br>
                    The cost before any discounts is: £$currentPrice<br>
                    The total discount you are receiving is: $discount%<br>
                    The cost after being discounted is: £$discounted_price
                </p>";
        }

        // Assuming that all books sold are £10
        discountPriceAndShow(3, 30);
        discountPriceAndShow(4, 40);
        discountPriceAndShow(10, 100);
        discountPriceAndShow(15, 150);
        
    ?>
</body>
</html>