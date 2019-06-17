<?php
function filter_get($string){
$string = preg_replace('/[^0-9.]/','',$string);
	return $string;
}
echo filter_get('\'');
?>