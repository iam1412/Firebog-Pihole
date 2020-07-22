<?php
/*
firebog - https://firebog.net
All type hosts - https://v.firebog.net/hosts/lists.php?type=all
*/

$url = "https://v.firebog.net/hosts/lists.php?type=all";
$data = explode("\n", file_get_contents($url));
echo '<pre>';
print_r($data);
echo '</pre>';

?>