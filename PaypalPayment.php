<?php

include 'cart.php';

class PaypalPayment {

	public function ui(): string {
		$CLIENT_ID = 'dk';
		$cart = new Cart();

		return <<<HTML

	<script>
		<script src="https://www.paypal.com/sdk/js?client-id={$CLIENT_ID}&currency=EUR"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: '{$cart->set}'{
                value:  // Can also reference a variable or function
              } 
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction \${transaction.status}: \${transaction.id}\n\n`);
          });
        }
      }).render('#paypal-button-container');
    </script>
	</script>
	}
}














?>