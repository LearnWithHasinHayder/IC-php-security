<?php 
// $username = "admin";
// $password = "ItsABadPassword";


// $md5 = md5($password); //hashing
// echo "MD5: $md5\n";
$hashedPassword = "35d6f4ff91e0aef7c4349458652ad2ef";

$submittedPassword = 'ItsABadPassword2';

if(md5($submittedPassword) == $hashedPassword){
    echo "Password is correct";
}else{
    echo "Password is incorrect";
}