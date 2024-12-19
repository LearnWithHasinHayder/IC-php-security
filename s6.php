<?php 
$secret = "This is a secret message";
$encodedString = base64_encode($secret);

echo "Encoded: $encodedString\n";

$encodedString = "VGhpcyBpcyBhIHNlY3JldCBtZXNzYWdl";
$orifinalString = base64_decode($encodedString);
echo "Original: $orifinalString\n";