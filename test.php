<?php
include_once './validation.php';
$val= new validation();
echo $val->check('as *asartrt',array("checkNumeric","checkAlphabetOnly","checkAlphabetwithSpaceandQuote"));
//echo $val->input("aaa", $type);
?>
