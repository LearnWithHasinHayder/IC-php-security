<?php 
$secret = "This is a secret message";
$password = "Pa55w0rd";

$algorithmName = "AES-128-ECB";
$algorithmName = "AES-256-ECB";
$algorithmName = "des-ede-ecb";
// $algorithmName = "chacha20";

$encryptedString = openssl_encrypt($secret,$algorithmName,$password);
echo "Encrypted: $encryptedString\n";

// $encryptedMessage = "MzDdnttaot4eNQfP41b/cTwBr6XOepS49I7lmLxc5i4=";
$decryptedMessage = openssl_decrypt($encryptedString,$algorithmName,$password);
echo "Decrypted: $decryptedMessage\n";