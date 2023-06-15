<?php 
$username ='admin';
$password ='greg';
 $encrypted_password = crypt($password,base64_encode($password));
 echo $username .':' .$encrypted_password;
