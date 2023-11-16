<?php
session_start();
$dbHost = 'localhost';
$dbName = 'art website';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>