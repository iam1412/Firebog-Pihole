<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

$bebug = false;

$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
_print_r($data);


function _print_r($data = array()){
    if($debug){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

?>