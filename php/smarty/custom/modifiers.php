<?php

function smarty_modifier_log($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}