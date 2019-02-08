<?php 
 if( isset($_POST['nom']) ) {
	 
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
 
	$ch=$_POST['nom'];
	$key=$_POST['key'];
	$champ=$_POST['name'];
	 
 $json[$key]{$champ}=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 if( isset($_POST['nom1']) ) { 
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$ch=$_POST['nom1'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key;
	echo $name;
	echo $ch;
	$json[$key1][$champ][$key][$name]=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 if( isset($_POST['nom2']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$ch=$_POST['nom2'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$key2=$_POST['key2'];
	$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key2;
	echo $name;
	echo $key;
	
	$json[$key1][$champ][$key2][$name][$key]=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 
 
 if( isset($_POST['moin']) ) {
	 
	$test = file_get_contents("inforjson.json");

$json = json_decode($test,true);
       

	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$key2=$_POST['key2'];
	
	$champ="valeure";
	$name="article";
	echo $key1;
	
	echo $key2;
	
	echo $key;
	
	unset($json[$key1][$champ][$key2][$name][$key]);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
  if( isset($_POST['moin1']) ) {
	 
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	//$ch=$_POST['nom1'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	//$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key;
	unset($json[$key1][$champ][$key]);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 } 
 if( isset($_POST['moin3']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$key=$_POST['key'];
	echo $key ;
	
	unset($json[$key]);
	$json= array_values($json);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
?>