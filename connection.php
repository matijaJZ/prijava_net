<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prijava_net";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
