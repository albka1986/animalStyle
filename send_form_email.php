<?php
if ( isset( $_POST[ 'email' ] ) ) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "albka1986@gmail.com";
	$email_subject = "AnimalStyle order";

	function died( $error ) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error . "<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}


	// validation expected data exists
	if ( !isset( $_POST[ 'first_name' ] ) ||
		!isset( $_POST[ 'telephone' ] ) ||
		!isset( $_POST[ 'comments' ] ) ) {
		died( 'We are sorry, but there appears to be a problem with the form you submitted.' );
	}



	$first_name = $_POST[ 'first_name' ]; // required
	$telephone = $_POST[ 'telephone' ]; // not required
	$comments = $_POST[ 'comments' ]; // required

	$error_message = "";
	

	$string_exp = "/^[A-Za-z .'-]+$/";

	if ( !preg_match( $string_exp, $first_name ) ) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}
	

	if ( strlen( $comments ) < 2 ) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}

	if ( strlen( $error_message ) > 0 ) {
		died( $error_message );
	}

	$email_message = "Form details below.\n\n";


	function clean_string( $string ) {
		$bad = array( "content-type", "bcc:", "to:", "cc:", "href" );
		return str_replace( $bad, "", $string );
	}



	$email_message .= "First Name: " . clean_string( $first_name ) . "\n";
	$email_message .= "Telephone: " . clean_string( $telephone ) . "\n";
	$email_message .= "Comments: " . clean_string( $comments ) . "\n";

	// create email headers

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html\r\n";
	$headers .= 'From: from@example.com' . "\r\n" .
	'Reply-To: reply@example.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	error_reporting( -1 );
	ini_set( 'display_errors', 'On' );
	set_error_handler( "var_dump" );

	mail( $email_to, $email_subject, $email_message, $headers );
	?>

	<!-- include your own success html here -->

	Спасибо!
	Ваша заявка отправлена.

	<?php

}
?>