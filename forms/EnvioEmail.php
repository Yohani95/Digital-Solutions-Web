<?php
$email = new \SendGrid\Mail\Mail();
$email->setFrom("digital.solutions.spa22@gmail.com", "Example User");
$email->setSubject("Sending with Twilio SendGrid is Fun");
$email->addTo("digital.solutions.spa22@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>