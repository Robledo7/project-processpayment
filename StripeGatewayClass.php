<?php
include_once 'PaymentGatewayInterface.php';
class StripeGateway implements PaymentGateway{

    public function processPayment($amount) {
        // Stripe-specific payment processing logic
}

    public function refundPayment($transactionId) {
        // Stripe-specific refund logic
}

    public function cancelPayment($transactionId) {
        // Stripe-specific cancelation logic
}

}
