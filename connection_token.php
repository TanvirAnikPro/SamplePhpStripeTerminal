<?php
require_once __DIR__. '/vendor/autoload.php';

// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
$stripe = new Stripe\StripeClient('sk_test_51NRfBfE6kIMFPVxTEnMcudOMXAg0dxQDfwJenpiCPOWWmk3QOJKPly7KJJJUNGNpwD4RLWN7Kir7iRpsXGFdOApy00S9MfxXNb');

try {
  // The ConnectionToken's secret lets you connect to any Stripe Terminal reader
  // and take payments with your Stripe account.
  // Be sure to authenticate the endpoint for creating connection tokens.
  $connectionToken = $stripe->terminal->connectionTokens->create();
  echo json_encode(array('secret' => $connectionToken->secret));
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}