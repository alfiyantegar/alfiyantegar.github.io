<?php
$receiving_email_address = 'tegarsh1@gmail.com';
if( file_exists($php_email_form = '../assets/vendor/php-email-form/validate.js' )) {
  include( $php_email_form );
} else {
  die( 'Unable to load the "PHP Email Form" Library!');
}
$contact = new PHP_Email_Form;
$contact->ajax = true;
$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];
$contact->smtp = array(
  'host' => 'smtp.elasticemail.com',
  'username' => 'tegarsh1@gmail.com',
  'password' => 'CCB0CEC367635CB3950D591428C6F0DD064E',
  'port' => '2525'
  );
$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);
$contact->honeypot = $_POST['submit'];
echo $contact->send();
?>