<?php
    
    $prices['Tires'] = 100;
    $prices['Oil'] = 10;
    $prices['Spark Plugs'] = 4;

    echo "<br />Displaying the elements in the prices array<br />";

    foreach ($prices as $key => $value){
        echo $key." - ".$value."<br />";
    }

    // while ($element = each($prices)) {
    //     echo $element['key'] . ' - ' . $element['value'] . "<br />";
    // }

    $precios['Gomas'] = 100;
    $precios['Aceite'] = 10;
    $precios['Tires'] = 4;

    echo "<br />Displaying the elements in the precios array:<br />";

    foreach ($precios as $key => $value){
        echo $key." - ".$value."<br />";
    }

    echo "<br />Displayin the elements using foreach with key values 
        after using the append + operator, we also made an element to
        have the same key to make sure we properly tested the append<br />";
    foreach (($prices + $precios) as $key => $value){
        echo $key." - ".$value."<br />";
        }

    echo "<br /> Testing the Equality == operator<br />";
    if($prices == $precios) {
        echo "True";
    } else {
        echo "False";
    }

    $products = array( array('TIR', 'Tires', 100),
                       array('OIL', 'Oil', 10),
                       array('SPK', 'Spark Plugs', 4) );

    echo "<br />Access to a multidimientional array manually<br />";
    echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
    echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
    echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';
    
    echo "<br />We can aslo access a multidimentional array using nested for loops<br />";
    for ($row = 0; $row < 3; $row++){
        for ($column = 0; $column < 3; $column++){
            echo '|'.$products[$row][$column];
        }
        echo '|<br />';
    }
    echo "The code is a lot simpler and provides us with the same result<br />";
?>