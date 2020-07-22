<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

$debug = false;
$all_data = array();

$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
_print_r($data);
if(is_array($data)){
    foreach($data as $single_url){
        $single_data = explode("\n", trim(file_get_contents($single_url)));
        _print_r($single_data);
        $all_data = array_merge($all_data, $single_data);
    break;
    }
}

echo count($all_data);


function _print_r($data = array()){
    global $debug;
    if($debug){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

?>