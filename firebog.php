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
include_once "./vendor/autoload.php";

use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

$filesystemAdapter = new Local(__DIR__ . '/');
$filesystem = new Filesystem($filesystemAdapter);
$pool = new FilesystemCachePool($filesystem);
// $pool->set('all', null);
if (!empty($pool->get("all"))) {
    echo $pool->get("all");
    // var_dump($pool->get('all'));
} else {

    $all = array();
    $url = "https://v.firebog.net/hosts/lists.php?type=all";
    $data = explode("\n", trim(file_get_contents($url)));
    if (is_array($data)) {
        foreach ($data as $single_url) {
            $thum = explode("\n", file_get_contents($single_url));
            // var_dump($thum);die;
            $all = array_combine($all, $thum);
        }
    }
    $all = array_unique($all);
    $show = implode("\n", $all);
    $pool->set('all', $show);
    echo $show;

}
