<?php
	define("__ROOT__", $_SERVER["DOCUMENT_ROOT"]);
	define("__PHP__", __ROOT__ . '/php/');

	require_once(__ROOT__ . '/php/functions.php');
	require_once(__ROOT__ . '/php/smarty/smarty.php');



	



	$smarty->display('index.tpl');
