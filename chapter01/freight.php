<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Freight Costs</title>
    </head>
    <body>
        <table style="border: 0px; padding: 3px">
            <tr>
                <td style="background: #cccccc; text-align: center;">Distance</td>
                <td style="background: #cccccc; text-align: center;">Cost</td>
            </tr>

            <?php 
                $distance = 50;
                while ($distance <= 250){
                    echo "<tr>
                          <td style=\"text-align: right;\">".$distance."</td>
                          <td style=\"text-align: right;\">".($distance / 10)."</td>
                          </tr>\n";
                          $distance += 50;
                }

                # If we re-write the while loop using a for loop we get the following:
                // for ($distance = 50; $distance <= 250; $distance += 50){
                //     echo "<tr>
                //           <td style=\"text-align: right;\">".$distance."</td>
                //           <td style=\"text-align: right;\">".($distance / 10)."</td>
                //           </tr>\n";
                // } 
                # giving us the same result.
            ?>
        </table>
    
    </body>
</html>





