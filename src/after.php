<?php
declare(strict_types=1);

function order_pizza($pizzatype, $customer) {

    $price = calcul_price($pizzatype);
    $address = get_address($customer);
    
    $toPrint ='Creating new order... <br>';
    $toPrint .= 'A ' . $pizzatype;  
    $toPrint .= ' pizza should be sent to ' . $customer . '. <br>The address: '. $address .'<br>';
    $toPrint .='The bill is €'.$price.'.<br>';
    $toPrint .= "Order finished.<br><br>";

    return $toPrint;
}
// C'est mieux si on fait une fonction pour l'address

function get_address($customer){
    
    switch ($customer) {
        case 'koen':
            return 'a peniche in Liège';
        case 'nico':    
            return 'somewhere in Belgium';
        case 'students' :
            return 'beCode office';
        default:
            return "Address missing, call the customer !";            
    }
    // comme on est dans une fonction, on n'a pas besoin de mettre break dans switch
}
// C'est mieux de faire return dans la fonction et après on fait echo quand on l'appelle la fonction
function calcul_price($pizza_type){
    $price = 0; // comme c'est price c'est un chiffre, on l'intialise à 0. C'est mieux que 'unknown'
    

    if ($pizza_type == 'margherita') {
       $price = 5;
    } elseif($pizza_type == 'golden') {
       $price = 100;
    } elseif ($pizza_type == 'calzone') {
       $price = 10;
    } elseif ($pizza_type == 'hawai') {
       throw new Exception('Computer says hell no');
    } else {
        $price = 5;
    }

    return $price;
}

echo order_pizza('calzone', 'nico');
echo order_pizza('margherita', 'nick');
echo order_pizza('golden', 'students');





