<?php 
$algorithms =  openssl_get_cipher_methods();
foreach($algorithms as $algorithm){
    echo "$algorithm\n";
}