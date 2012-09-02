<?php
$id = $_GET['id'];
$battletag = $_GET['battletag'];
$url="http://us.battle.net/api/d3/profile/$battletag/hero/$id";


$jsonraw=file_get_contents($url);
$hero=json_decode($jsonraw);
//var_dump($json);
$skills=$hero->skills;
$activeskills=$skills->active;
var_dump($activeskills);
?>