<?php 
$password = "ThisIsMyPassword";

$hash = password_hash($password, PASSWORD_DEFAULT);
// echo "Hash: $hash\n";

//$2y$10$cvYYaFiJUNW7EQ8sON7t.e8C3b5wP8qvuOM.U4i//7lG1RLFJaMci
//$2y$10$pb2aZtw.AKR/M8.qjU2px.C6jaZH3NmsorH9syoVgQ8yj7mivoKEC
//$2y$10$9mUXacXao4UraNdeoiDcNei/8WFy9idstFIRG.RlhK.ynj4uIOA.m

$userSubmittedPassword = "ThisIsMyPassword";
// $hash = "$2y$10$6imrzVes7F6NwP9g.PWsDeux16tZy8gnrNTBxDnToZWthQr5UtApq";
// $hash = '$2y$10$cvYYaFiJUNW7EQ8sON7t.e8C3b5wP8qvuOM.U4i//7lG1RLFJaMci';
$hash = '$2y$10$9mUXacXao4UraNdeoiDcNei/8WFy9idstFIRG.RlhK.ynj4uIOA.m';

if(password_verify($userSubmittedPassword, $hash)){
    echo "Password is correct";
}else{
    echo "Password is incorrect";
}