<?php
ob_start();
session_start();


DEFINE("BASE_URL","http://localhost/payroll/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'payroll');

date_default_timezone_set('Asia/Kolkata');
$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($conn->connect_error)
    die("Failed to connect database ".$conn->connect_error );
