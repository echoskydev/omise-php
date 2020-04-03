<?php
session_start();
define('OMISE_PUBLIC_KEY', 'pkey_test_5jf906jk2za4o8uumj9');
define('OMISE_SECRET_KEY', 'skey_test_5jf906jk3lbtw2xso7t');
define('RETURN_URI', 'checkout-complete.php'); // must point to success.php

require_once dirname(__FILE__) . '/vendor/autoload.php';

try {
    if ($_POST['omiseSource']) { // For alternative payment methods.
        $charge = OmiseCharge::create(array(
            'amount'     => '350000',
            'currency'   => 'thb',
            'source'     => $_POST['omiseSource'],
            'return_uri' => 'https://dmctest.phpt.org/test/covid19/checkout/checkout-complete.php'
        ));
    } elseif ($_POST['omiseToken']) { // For credit card payment method.
        $charge = OmiseCharge::create(array(
            'amount'     => '350000',
            'currency'   => 'thb',
            'card'       => $_POST['omiseToken'],
            'return_uri' => 'https://dmctest.phpt.org/test/covid19/checkout/checkout-complete.php' // Only need when the 3-D Secure payment is enabled.
        ));
    }

    // var_dump($charge);
    // if ($charge['status'] == 'failed') {
    //     // Charge is failed.
    //     // Handle the failure case.
    //     exit;
    // }
    // // echo "========>".$charge['status'];
    // // $obj->pre($charge);
    // $charge_id = $charge['id'];
    // $charge_amount = $charge['amount'];
    // $_SESSION['charge_id'] = $charge_id;

    if (!is_null($charge['source'])) { // For alternative payment methods.
        if ($charge['source']['type'] == 'bill_payment_tesco_lotus') {
            // display barcode from $charge['source']['references']['barcode']
            // i.e.
            echo '<img src="' . $charge['source']['references']['barcode'] . '"/>';
            exit;
        } else {
            echo "redirect users out to the `authorize_uri` location.";
            header('Location: ' . $charge['authorize_uri']);
            exit;
        }
    } else { // For credit card payment method.
        if ($charge['status'] == 'successful') {
            // Charge complete (authorized and captured).
            // ..
            // $status_charge = true;
            // $charge_id = $charge['id'];
            // $charge_amount = $charge['amount'];
            // $_SESSION['charge_id'] = $charge_id;
            $_SESSION['checkout'] = $charge;
            header('Location: ' . $charge['authorize_uri']);
        } elseif ($charge['status'] == 'pending' && $charge['authorized'] && !$charge['paid']) {
            // 'Authorized only' case.
            // ..
            echo "'Authorized only' case.";
        } elseif ($charge['status'] == 'pending' && !$charge['authorized'] && !$charge['paid'] && !is_null($charge['authorize_uri'])) {
            // 3-D Secure payment is enabled.
            // redirect users out to the `authorize_uri` location.
            echo "3-D Secure payment is enabled.";
            header('Location: ' . $charge['authorize_uri']);
            exit;
        }
    }
} catch (Exception $e) {
    $error_message = $e->getMessage();
    var_dump($error_message);
    // $_SESSION['charge_error'] = $error_message;
    // header('Location: checkout.complete.php');
    // Handle an execption case.
}
