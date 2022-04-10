
<?php // Define constants
const RECIPIENT_NAME        = "khlmototravel.com";
const RECIPIENT_EMAIL       = "andreysergeevich200@gmail.com";
//const RECIPIENT_EMAIL       = "a9942212@gmail.com";
const EMAIL_SUBJECT         = "[New bike rent]";

$order_bike                 = $_POST['bike'];
$order_biker_email          = $_POST['biker_email'];
$order_biker_name           = $_POST['biker_name'];
$order_biker_phone          = $_POST['biker_phone'];
$order_days_rent            = $_POST['days_rent'];
$order_pickup_date          = $_POST['pickup_date'];
$order_price_total          = $_POST['price_total'];
$order_return_date          = $_POST['return_date'];
$order_promo_code           = $_POST['promo_code'];

$message = "
	<html lang='en'>
		<body>
			<p><strong>Bike:</strong> $order_bike</p>
			<p><strong>Pickup:</strong> $order_pickup_date</p>
			<p><strong>Return:</strong> $order_return_date</p>
			<p><strong>Name:</strong> $order_biker_name</p>
			<p><strong>Phone:</strong> $order_biker_phone</p>
			<p><strong>E-mail:</strong> $order_biker_email</p>
			<p><strong>Days at rent:</strong> $order_days_rent</p>
			<p><strong>TOTAL:</strong> $order_price_total лв</p>
			<p><strong>promo code:</strong> [$order_promo_code]</p>
		</body>
	</html>
";

// If all values exist, send the email
if ($order_bike) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
    $headers = "Content-type: text/html; charset = utf-8 \r\n";
    $headers .= "From: " . $order_biker_name . " <" . $order_biker_email . ">";
    $success = mail($recipient, EMAIL_SUBJECT . ' ' . $order_bike, $message, $headers);
}

// sent a message to telegram chat
$messageT = "[New bike rent]";
$messageT .= " Bike: ".$order_bike;
$messageT .= " | Pickup: ".$order_pickup_date;
$messageT .= " | Return: ".$order_return_date;
$messageT .= " | Name: ".$order_biker_name;
$messageT .= " | Phone: ".$order_biker_phone;
$messageT .= " | E-mail: ".$order_biker_email;
$messageT .= " | Days at rent: ".$order_days_rent;
$messageT .= " | TOTAL: ".$order_price_total;
$messageT .= " | promo code: [".$order_promo_code."]";

$token      = "5165616331:AAHYP1x58p3wlV7uChH6ixqq7jLQumbRfXQ";
$chat_id    = "-735849686";

$result = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$messageT}");

// Return an appropriate response to the browser
if (isset($_GET["ajax"])) {
    echo $success ? "success" : "error";
}
else { ?>
	<html lang="en">
	<head>
		<title>Thank you!</title>
	</head>

	<body>
    <?php if ($success) { ?>
		<p>Thank you for your message!</p>
    <?php }
    else { ?>
		<p>Error while sendind, try again please</p>
    <?php } ?>

	<a href="/">To home page</a>
	</body>
	</html>
<?php } ?>
