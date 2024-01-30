<?php
require_once __DIR__. '/vendor/autoload.php';

// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
$stripe = new Stripe\StripeClient('sk_test_51NRfBfE6kIMFPVxTEnMcudOMXAg0dxQDfwJenpiCPOWWmk3QOJKPly7KJJJUNGNpwD4RLWN7Kir7iRpsXGFdOApy00S9MfxXNb');

try {
  $json_str = file_get_contents('php://input');
  $json_obj = json_decode($json_str);

  $intent = $stripe->paymentIntents->capture($json_obj->payment_intent_id);

  echo json_encode($intent);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}