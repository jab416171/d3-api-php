<?php
$battletag = $_POST['battletag'];
$battletag = str_replace("#","-",$battletag);
$url="http://us.battle.net/api/d3/profile/$battletag/";
$jsonraw=file_get_contents($url);
$json=json_decode($jsonraw);
var_dump($json);
?>