<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_0naJ4STLzbYXcY3Nng94AsNY",
  "publishable_key" => "pk_test_X4ykRVHUU7we1J9kKzopb38v"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
