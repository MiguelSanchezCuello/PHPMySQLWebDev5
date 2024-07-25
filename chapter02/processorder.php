<?php
    // creae short variable names
    $tireqty = (int) $_POST['tireqty'];
    $oilqty = (int) $_POST['oilqty'];
    $sparkqty = (int) $_POST['sparkqty'];
    // $address = preg_replace('/\t|\R/',' ',$_POST['address']);
    $address = $_POST['address'];
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $date = date('H:i, jS F Y');
?>

<!DOCTYPE html>
<html lang="en">
    <head></head>
    <body>
        <?php
            echo $tireqty."<br />";
            echo $oilqty."<br />";
            echo $sparkqty."<br />";
            echo $address."<br />";
            echo $document_root."<br />";
            echo $date."<br />";
        ?>
    </body>
</html>