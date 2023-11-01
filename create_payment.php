<?php

require_once 'paypal_credentials.php';
require 'vendor/autoload.php';


use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

// Set up the API context
$apiContext = new ApiContext(
    new OAuthTokenCredential(PAYPAL_CLIENT_ID, PAYPAL_SECRET)
);
$apiContext->setConfig([
    'mode' => PAYPAL_MODE,
]);

// Define the payment details
$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item1 = new Item();
$item1->setName('Item 1')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setPrice(10);

$item2 = new Item();
$item2->setName('Item 2')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setPrice(20);

$itemList = new ItemList();
$itemList->setItems([$item1, $item2]);

$details = new Details();
$details->setShipping(0)
    ->setTax(0)
    ->setSubtotal(30);

$amount = new Amount();
$amount->setCurrency('USD')
    ->setTotal(30)
    ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription('Payment description')
    ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl('https://example.com/success')
    ->setCancelUrl('https://example.com/cancel');

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions([$transaction]);

// Create the payment and redirect to PayPal for user approval
try {
    $payment->create($apiContext);
    $approvalUrl = $payment->getApprovalLink();
    header("Location: $approvalUrl");
} catch (Exception $e) {
    echo $e->getMessage();
}
