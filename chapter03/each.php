<?php
    $prices['Tires'] = 100;
    $prices['Oil'] = 10;
    $prices['Spark Plugs'] = 4;

    echo "<br />";

    foreach ($prices as $value){
    echo $value."<br />";
    }

    while ($element = each($prices)) {
        echo $element['key'] . ' - ' . $element['value'] . "<br />";
    }
?>