<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'userdata';

    $mysql_conn = mysqli_connect($hostname, $username, $password, $databasename);
    if(!$mysql_conn){
        die(mysqli_error($mysql_conn));
    }


?>