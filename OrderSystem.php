<?php
    //pricelist
    $Adidas = 10;
    $Isaw = 15;
    $Barbeque = 20;
    if (empty($_POST["quantity"]) || empty($_POST["cash"])) {
    } else {
        
        if (is_numeric($_POST["quantity"]) && is_numeric($_POST["cash"])) {
            if ($_POST["order"] == "Adidas") {
                $_POST["order"] = $Adidas;
            } elseif ($_POST["order"] == "Isaw") {
                $_POST["order"] = $Isaw;
            } elseif ($_POST["order"] == "Barbeque") {
                $_POST["order"] = $Barbeque;
            }
            $order = $_POST["order"];
            $quantity = ($_POST["quantity"]);
            $cash = ($_POST["cash"]);
            $total_cost = $order * $quantity;
            $change = $cash - $total_cost;
            if ($quantity <= 0) {
                echo"<br>Invalid";
            } elseif ($total_cost <= $cash) {
                echo"<strong><br> The total cost is {$total_cost} <br>";
                echo"Your change is {$change}<br><br></strong>";
                echo"Thanks for the order!";
            } else {
                echo "<strong><br>You don't have enough money</strong>  ";
            }
        } else {
            echo "<br>Invalid Input";
        }
    }
?>