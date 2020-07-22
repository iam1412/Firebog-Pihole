<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

/*
// Show only : Not unique 
$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
if(is_array($data)){
    foreach($data as $single_url){
        echo file_get_contents($single_url) . "\n\n\n";
    }
}
*/

// Unique
$all = array();
$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", trim(file_get_contents($url)));
if(is_array($data)){
    foreach($data as $single_url){
        $thum = explode("\n",file_get_contents($single_url));
        $all = array_combine($all, $thum);
    }
}
$all = array_unique($all);
foreach($all as $single){
    echo $single . "\n";
}


?>