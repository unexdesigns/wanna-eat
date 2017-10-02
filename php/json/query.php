<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/php/reusable.php');

header('Content-Type: application/json');
if(isset($_POST["query"])){
	echo json_encode(query($_POST["query"]));
} else {
	die();
}