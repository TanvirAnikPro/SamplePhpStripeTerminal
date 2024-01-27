<?php
// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
$stripe = new \Stripe\StripeClient('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

try {
  $json_str = file_get_contents('php://input');
  $json_obj = json_decode($json_str);

  // For Terminal payments, the 'payment_method_types' parameter must include
  // 'card_present'.
  // To automatically capture funds when a charge is authorized,
  // set `capture_method` to `automatic`.
  $intent = $stripe->paymentIntents->create([
    'amount' => $json_obj->amount,
    'currency' => 'usd',
    'payment_method_types' => [
      'card_present',
    ],
    'capture_method' => 'manual'
  ]);

  echo json_encode($intent);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}