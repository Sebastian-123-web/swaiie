<?php
    $host="localhost";
    $user="root";
    $pass="411admi70@tsc";
    $db="transber_tk";

    $link = mysqli_connect($host, $user, $pass, $db) or die("Error para conectarse al servidor y la db");

    return $link;
?>
