<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
if(is_array($data)){
    foreach($data as $single_url){
        echo file_get_contents($single_url);
    }
}
?>