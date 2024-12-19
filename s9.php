<?php 

//symetric encryption

$secret = "This is a secret message";
$password = "Pa55w0rd";

// $algorithmName = "AES-128-ECB";
// $algorithmName = "AES-256-ECB";
// $algorithmName = "des-ede-ecb";
$algorithmName = "chacha20";
$algorithmName = "camellia-192-cbc";

$ivlength = openssl_cipher_iv_length($algorithmName);
echo "IV Length: $ivlength\n";

$iv = openssl_random_pseudo_bytes($ivlength);
echo "IV: $iv\n";

$encryptedString = openssl_encrypt($secret,$algorithmName,$password,0,$iv);
echo "Encrypted: $encryptedString\n";

$decryptedMessage= openssl_decrypt($encryptedString,$algorithmName,$password,0,$iv);
echo "Decrypted: $decryptedMessage\n";