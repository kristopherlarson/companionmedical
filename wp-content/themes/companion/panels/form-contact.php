<?php
/* 
====================
CONTACT FORM
====================
*/
// Only process POST reqeusts.
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	// Define email constants
	define('WEBSITE_NAME', get_bloginfo('name'));
	define('WEBSITE_DOMAIN', $_SERVER['HTTP_HOST']);

	// Define errors
	$errors = [];

	// Needed to correctly setup wp_mail
	add_filter('wp_mail_from', function($email)
	{
		return 'no-reply@' . WEBSITE_DOMAIN;
	});
	add_filter('wp_mail_from_name', function($name)
	{
		return WEBSITE_NAME;
	});
	function set_content_type($content_type)
	{
		return 'text/html';
	}
	add_filter('wp_mail_content_type', 'set_content_type');

	// Input Fields
	$emailFields = array(
		//  Input Name  =>  User Friendly Name
		'first_name' => 'Full Name',
		'last_name' => 'Last Name',
		'email'     => 'Email',
		'notes'     => 'Comments'
	);

	// Required Fields
	$required_fields = array(
		'first_name' => 'First Name',
		'last_name' => 'Last Name',
		'email' => 'Email',
        'notes' => 'Comments'
	);

	// Check required fields
	foreach ($required_fields as $field_name => $friendly_name) {

		if ( empty( $_POST[$field_name] ) ) {

			$errors[] = $friendly_name . ' is a required field.<br/>';

		}

	}

	// Check honeypot field
	if ( !empty($_POST['home_address']) ) {

		echo 'No spam please!';
		exit;

	}

	// Email subject, headers and recipient

	$reply_to = $_POST['full_name'];
	$reply_to .= ' <' . $_POST['email'] . '>';

	$headers[] = "Reply-To: " . $reply_to;

	$subject = WEBSITE_NAME . ' Website Contact';

	$email_top  = WEBSITE_NAME . ' Website Contact Form Inquiry:';
	$email_html = $email_top . '<br><br>';
	$email_text = $email_top . "\n\n";


	$email_sender = get_field('send_to_email', 'option'); // get ACF field in contact options page
	$email_recipients = array(
		'' . $email_sender . ''
	);

	// Build Email Output & Data Sanitize
	foreach ($emailFields as $field_name => $friendly_name) {

		if ($field_name == 'first_name') {
			$_POST[$field_name] = filter_var($_POST[$field_name], FILTER_SANITIZE_STRING);
		}
		if ($field_name == 'last_name') {
			$_POST[$field_name] = filter_var($_POST[$field_name], FILTER_SANITIZE_STRING);
		}
		if ($field_name == 'email') {
			$_POST[$field_name] = filter_var($_POST[$field_name], FILTER_SANITIZE_EMAIL);
		}
		if ($field_name == 'notes') {
			$_POST[$field_name] = stripslashes(filter_var( $_POST[$field_name], FILTER_SANITIZE_STRING));
		}
		$email_html .= '<b>' . $friendly_name . '</b>: ' . $_POST[$field_name] . '<br />';
		$email_text .= $friendly_name . ': ' . $_POST[$field_name] . "\n";

	}

	$message = $email_html;


	// Send the email.
	if ( empty( array_filter( $errors ) ) ) {
		if ( wp_mail($email_recipients, $subject, $message, $headers) ) {

			echo '<p class="callout">Thank you for taking the time to fill out our form! We will be in contact with you shortly.</p>';
			$_POST = array();

		} else {

			$errors = "Oops! Something went wrong and we couldn't send your message.";

		}

	} else { ?>


		<p class="alert-box">
			<?php
			foreach($errors as $error) {

				echo $error;

			}
			?>
		</p>
		<?php
	}

} ?>

<form id="standard-form" method="post" action="#contact-us">

	<div class="mailing-list">

		<input class="contact-full-name" name="first_name" type="text" pattern="[a-zA-Z ]+" placeholder="First Name" value="<?php
		echo isset( $_POST['standard-form'] ) ? $_POST['first_name'] : '';
		?>" required />


		<input class="contact-last-name" name="last_name" type="text" pattern="[a-zA-Z ]+" placeholder="Last Name" value="<?php
		echo isset( $_POST['standard-form'] ) ? $_POST['last_name'] : '';
		?>" required />

		<input class="contact-email" name="email" type="email" placeholder="Email" pattern="[^ @]*@[^ @]*" value="<?php
		echo isset( $_POST['standard-form'] ) ? $_POST['email'] : '';
		?>" required />

		<input class="contact-notes" placeholder="Message" name="notes" type="text" required><?php
			   echo isset( $_POST['standard-form']) ? $_POST['notes'] : '';
			   ?>


	</div>


	<?php
	/* Phoney field post variable will need to be changed to something else if address is added to a different input */
	?>

	<p class="phoney-field">Address: <span>(required)</span>
		<input name="home_address" type="text" value="<?php
		echo isset($_POST['standard-form']) ? $_POST['home_address'] : '';
		?>" />
	</p>

	<input type="hidden" value="1" name="standard-form" />

	<div class="button-wrap">
		<button class="button form-submit">
			Submit
		</button>
	</div>

</form> <!-- /#standard-form -->