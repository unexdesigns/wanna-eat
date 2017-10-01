<?php
header('Content-Type: application/json');


// error_reporting(0);
require_once($_SERVER["DOCUMENT_ROOT"].'/php/functions.php');

if(isset($_POST["query"])){
	echo json_encode(query($_POST["query"]));
} else {
	die();
}