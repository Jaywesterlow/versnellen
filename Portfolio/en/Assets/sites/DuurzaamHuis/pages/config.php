<?php

session_start();

$host = "127.0.0.1"; /* Host name */
$user = "c6544Jaymar"; /* User */
$password = "Westerlow1"; /* Password */
$dbname = "c6544ecosy"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}