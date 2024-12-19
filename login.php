<?php 
$users = [
    "admin" => "35d6f4ff91e0aef7c4349458652ad2ef",//md5('ItsABadPassword')
    "user" => "5f4dcc3b5aa765d61d8327deb882cf99" // md5('password')
];

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usersPassword = $users[$username];

    if(md5($password)==$usersPassword){
        echo "Welcome $username";
    }else{
        echo "Invalid username or password";
    }
}else{
    echo "Please enter username and password";
}
