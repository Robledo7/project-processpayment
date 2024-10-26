<?php

include_once 'PaymentGatewayInterface.php';
include_once 'StripeGatewayClass.php';
include_once 'PayPalGatewayClass.php';

function processPayment(PaymentGateway $gateway, $amount) {
    // Common payment processing logic
    $gateway->processPayment($amount);
    // Additional application-specific logic
}

//NUEVOS PAGOS
$paypalGateway = new PayPalGateway();
//Acá pongo el met y la variable entre paréntesis (mismo met. con dif sistema de pago) ->cambia el comportamiento pero la interface es la misma
processPayment($paypalGateway, 100.00);


$stripeGateway=new StripeGateway();
processPayment($stripeGateway, 50);

