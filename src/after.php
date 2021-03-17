<?php

// name = for who
function pizzaOrder($pizzatype, $name) {

    $type = $pizzatype;
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price = calculatCost($type);
    $address = 'unknown';
    switch($name){
        case 'nico';
            $address = 'somewhere in Belgium';
            break;
        case 'students';
            $address ='BeCode office';
            break;
    }
    echo 'Creating new order... <br>';
    $toPrint .=   ' pizza should be sent to ' . $name . ". <br>The address: {$address}.";
        echo $toPrint; echo '<br>';
        echo'The bill is €'.$price.'.<br>';
        echo "Order finished.<br><br>";
}
function calculatCost($pizza){
    $cost = 'unknown';

    switch ($pizza){
        case 'marguerita';
            $cost = 5;
            break;
        case 'golden';
            $cost = 100;
            break;
        case 'calzone';
            $cost = 10;
            break;
    }
    return $cost;
}

function ordr_piz_all(){
    pizzaOrder('calzone', 'nico');
    pizzaOrder('marguerita', 'nick');
    pizzaOrder('golden', 'students');
}

function make_Allhappy($do_it) {
if ($do_it) {
    ordr_piz_all();
    } 
}

make_Allhappy(true);