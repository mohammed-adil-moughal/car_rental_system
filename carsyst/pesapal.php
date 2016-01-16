<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">

To pay with PayPal now please click on the PayPal icon below:

<input type="hidden" name="cmd" value="_xclick"><br>
<input type="hidden" name="business" value="your@paypal.email"><br>
<input type="hidden" name="item_name" value="Order #{$order_id}"><br>
<input type="hidden" name="amount" value="{$order_amount}"><br>
<input type="hidden" name="currency_code" value="{$currency_iso_3}"><br>
<input type="image" name="submit" src="http://images.paypal.com/images/x-click-but01.gif" alt="Pay with PayPal"><br>
< /form>