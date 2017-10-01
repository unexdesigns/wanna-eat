<?php

// put full path to Smarty.class.php
require(__ROOT__.'/lib/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(__ROOT__.'/templates');
$smarty->setCompileDir(__ROOT__.'/smarty/templates_c');
$smarty->setCacheDir(__ROOT__.'/smarty/cache');
$smarty->setConfigDir(__ROOT__.'/smarty/configs');

require(__DIR__ . '/custom/modifiers.php');