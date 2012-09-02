<?php
//var_dump($_POST);
$battletag = $_GET['battletag'];

$battletag = str_replace("#","-",$battletag);
$url="http://us.battle.net/api/d3/profile/$battletag/";
$jsonraw=file_get_contents($url);
$json=json_decode($jsonraw);
//var_dump($json);
//var_dump($json->heroes[0]->name);
$heroes = $json->heroes;
echo '<table>';
foreach($heroes as $hero) {
//var_dump($hero);
	echo '<tr><th>Name</th><td>' . $hero->name . '</td></tr>';
	echo '<tr><th>More Infor</th><td>' . '<a href="hero.php?id='.$hero->id.'&battletag='.$battletag.'">Click</a>' . '</td></tr>';
	echo '<tr><td><br/></td></tr>';
}
echo '</table>';
//foreach($json as $property => $value)  { 
/*
	if($value instanceof Array) {
		foreach($val as $prop2 => $val2) {
			print($prop2 . ' = ' . $val2 . '<br />');
		}
	}
	else {
	*/
		//print($property . ' = ' . $value . '<br />');
	//}
//}

?>