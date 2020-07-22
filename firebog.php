<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

$bebug = true;

$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
_print_r($data);
if(is_array($data)){
    foreach($data as $single_url){
        $single_data = explode("\n", trim(file_get_contents($single_url)));
        _print_r($single_data);
    break;
    }
}


function _print_r($data = array()){
    global $debug;
    if($debug){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

?>