<?php
// hashing = transforming senstive data (password)
// into letters, numbers, and/or symbols
// via a mathematical process.(similar to encrypt)
// Hides the original data from 3rd parties

// bcrypt hashing
$password = "pizza123";
$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("pizza123",$hash)){
    echo $hash;
}
else{
    echo "Incorrect password";
}
?>

<!-- md5 hashing -->

<!-- $password = "pizza123";
$hash = md5($password); -->