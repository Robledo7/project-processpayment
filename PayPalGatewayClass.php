<?php

include_once 'PaymentGatewayInterface.php';
class PayPalGateway implements PaymentGateway{
    public function processPayment($amount) {
        // PayPal-specific payment processing logic
}

    public function refundPayment($transactionId) {
         // PayPal-specific refund logic
}

    public function cancelPayment($transactionId) {
        // PayPal-specific cancelation logic
}


}
