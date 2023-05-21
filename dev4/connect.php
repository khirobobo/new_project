<?php
$user = 'root';
$password = "";
$bd = "log";
$connect = mysqli_connect('localhost', $user, $password, $bd);
if (mysqli_connect_errno()) {
    echo "erreur" . mysqli_connect_error();
    exit();
}
