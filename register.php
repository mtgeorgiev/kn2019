<?php
require_once "libs/User.php";

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User($username, $password);
$user->setEmail($_POST['email']);

try
{
    $user->save();
}
catch (Exception $ex)
{
    echo 'Cannot insert user:' . $ex->getMessage();
}


echo $user->toString();
