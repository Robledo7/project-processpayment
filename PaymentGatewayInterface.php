<?php

interface PaymentGateway{

    public function processPayment($amount);
    public function refundPayment($transactionId);
    public function cancelPayment($transactionId);

}