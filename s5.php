<?php 
$password = "ThisIsMyPassword";

$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
echo "Hash: $hash\n";