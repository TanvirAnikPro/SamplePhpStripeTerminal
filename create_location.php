<?php
// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
$stripe = new \Stripe\StripeClient('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

try {
  $location = $stripe->terminal->locations->create([
    'display_name' => 'HQ',
    'address' => [
      'line1' => "1272 Valencia Street",
      'city' => "San Francisco",
      'state' => "CA",
      'country' => "US",
      'postal_code' => "94110",
    ]
  ]);

  echo json_encode($location);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}