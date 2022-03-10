<?php // Define constants
define( 'RECIPIENT_NAME', 'khlmototravel.com' );
define( 'RECIPIENT_EMAIL', 'info@khlmototravel.com' ); // where to send email
define( 'EMAIL_SUBJECT', '[khlmototravel.com] Заявка' );



$senderEmail       = $_POST['email'];
$senderLink        = $_POST['link'];
$senderName        = $_POST['name'];
$senderPhone       = $_POST['phone'];



$message = "
	<html>
		<body>
			<p>E-mail: <strong>$senderEmail</strong></p>
			<p>Имя: <strong>$senderName</strong></p>
			<p>Телефон: <strong>$senderPhone</strong></p>
			<p>Ссылка: <strong>$senderLink</strong></p>
		</body>
	</html>
";

// If all values exist, send the email
//if ($sender_name && $sender_email && $sender_company) {
if ($senderName) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
    $headers = "Content-type: text/html; charset = utf-8 \r\n";
    $headers .= "From: " . $senderName . " <" . $senderEmail . ">";
    $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);
}

// Return an appropriate response to the browser
if (isset($_GET["ajax"])) {
    echo $success ? "success" : "error";
}
else { ?>
    <html>
        <head>
            <title>Thank you!</title>
        </head>

        <body>
        <?php if ($success) {
            echo "<p>Thank you for your message!</p>";
        }
        else {
            echo "<p>Error while sendind, try again please</p>";
        } ?>
        </body>
    </html>
<?php } ?>


