<?php

	class PaymentController extends \BaseController
	{

		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account
		use \Stripe\Stripe::setApiKey("sk_test_D1b6crqEVO2GI1TNIA10hh5G");

		// Get the credit card details submitted by the form
	$token = $_POST['stripeToken'];

		// Create the charge on Stripe's servers - this will charge the user's card
	try
	{
	$charge = \Stripe\Charge::create(array(
	"amount" => 1000, // amount in cents, again
	"currency" => "usd",
	"source" => $token,
	"description" => "payinguser@example.com")
	);
	}

	catch
	(\Stripe\Error\Card $e) {
	// The card has been declined
	}


	}
