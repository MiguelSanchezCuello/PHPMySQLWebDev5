<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        <?php
            // create short variable names
            $tireqty = $_POST['tireqty'];
            $oilqty = $_POST['oilqty'];
            $sparkqty = $_POST['sparkqty'];
            $find = $_POST['find'];

            # Definining the price of each item using constants.
            define('TIREPRICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);

            # To use a constant we don't need to use $ as with variables. 
            // echo TIREPRICE;
            // echo phpinfo(); # methods, functions and more useful stuff of PHP

            
            

            # This can also be written in a single line
            # using the concatenator operator (.)
            # echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

            
            

            $totalqty = 0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            

            if ($totalqty == 0){
                echo '<p style="color:red">';
                echo "You did not orderanything on the previous page!<br />";
                echo '</p>';
            } else {
                echo "<p>Items ordered: ".$totalqty."<br />";
                $totalamount = 0.00;

                $totalamount = $tireqty * TIREPRICE
                            + $oilqty * OILPRICE
                            + $sparkqty * SPARKPRICE;

                echo "Subtotal: $".number_format($totalamount, 2)."<br />";

                $taxrate = 0.10; // local sales tax is 10%
                $totalamount = $totalamount * (1 + $taxrate);
                echo "Total including tax: $".number_format($totalamount, 2)."</p>";

                echo '<p>Your order is as follow: </p>';
                if ($tireqty > 0)
                    echo htmlspecialchars($tireqty).' tires<br />';
                if ($oilqty > 0)
                    echo htmlspecialchars($oilqty).' bottles of oil<br />';
                if ($sparkqty > 0)
                    echo htmlspecialchars($sparkqty).' spark plugs<br />';

                # Calculating discounts using elseif
                if($tireqty < 10){
                    $discount = 0;
                } elseif (($tireqty >= 10) && ($tireqty <= 49)) {
                    $discount = 5;
                } elseif (($tireqty >= 50) && ($tireqty <= 99)) {
                    $discount = 10;
                } elseif ($tireqty >= 100) {
                    $discount = 15;
                }

                
                echo '<p>Order processed at ';
                echo date("H:i, jS F Y");
                echo "</p>";
            }

            switch ($find){
                case "a":
                    echo "<p>Regular customer.</p>";
                    break;
                case "b":
                    echo "<p>ReCustomer referred by TV advert.</p>";
                    break;
                case "c":
                    echo "<p>Customer referred by phone directory.</p>";
                    break;
                case "d":
                    echo "<p>Customer referred by word of mouth.</p>";
                    break;
            }
            
            # Testing the gettype() function
            // echo "<p>Testing getttype() and settype()</p>";
            // $a = 56;
            // echo "$a is ".gettype($a).'<br />';
            // settype($a, 'float');
            // echo "$a is ".gettype($a).'<br />';

            # For testing variable status
            // echo 'isset($tireqty): '.isset($tireqty).'<br />';
            // echo 'isset($nothere): '.isset($nothere).'<br />';
            // echo 'empty($tireqty): '.empty($tireqty).'<br />';
            // echo 'empty($nothere): '.empty($nothere).'<br />';
        ?>
    </body>
</html>