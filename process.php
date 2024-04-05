<?php
     $name = isset($_POST["name"])? $_POST["name"]: "Guest";

    $flavor = isset($_POST["flavor"])? $_POST["flavor"]: [];

    $totalCost = count($flavor)*3.5;

    echo "<h1>Thank You, $name!</h1>";
    echo "<p>You have ordered the following cupcakes:</p>";
    echo "<ul>";
    foreach ($flavor as $cupcake) {
        echo "<li>$cupcake</li>";
    }
    echo "</ul>";
    echo "<p>Total Amount: $" . number_format($totalCost, 2) . "</p>";
?>