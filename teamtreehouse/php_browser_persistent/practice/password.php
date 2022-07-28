<?php

$password="paSsword";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);

echo $encrypt_password;

if(password_verify('paSsword', $encrypt_password))
{
    echo "You have access to this page";
}else{
    echo "You don't have acces to this page";
}