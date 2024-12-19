<?php 
$password = "ThisIsMyPassword";

$md5 = md5($password); //128 bit
echo "MD5: $md5\n";

$sha = sha1($password); //160 bit 
echo "SHA1: $sha\n";

$sha256 = hash('sha256', $password); //256 bit
echo "SHA256: $sha256\n";

$sha512 = hash('sha512', $password); //512 bit
echo "SHA512: $sha512\n";

//haval192,5
$haval = hash('haval192,5', $password); //160 bit
echo "HAVAL: $haval\n";