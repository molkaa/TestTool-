<?php
include('adodb.inc.php');

$targetDatabase = 'teststools';
$targetServer = 'localhost';
$usename = 'root';
$password = '';
//test-2014
$conn = ADONewConnection('mysql'); 
$conn->PConnect($targetServer,$usename,$password,$targetDatabase);

?>