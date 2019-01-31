<?php 
 if( isset($_POST['nom']) ) {
	 
	$test = file_get_contents("htmljson.json");
$json = json_decode($test,true);
 
	$ch=$_POST['nom'];
	$key=$_POST['key'];
	$value=$_POST['value'];
	$champ=$_POST['name'];
	
	//$json[$id]=$ch;
   // $ch="hlhkhkhkhkhkkhkhkhkhkkkhkhh";
	 // 
	 echo $key ; 
 $json[$key]{$champ}=$ch;
	$new= json_encode($json);
	file_put_contents('htmljson.json',$new);
 }
 
 if( isset($_POST['nom1']) ) {
	 
	$test = file_get_contents("htmljson.json");
$json = json_decode($test,true);
 
	$ch=$_POST['nom1'];
	$key1=$_POST['key1'];
	$value1=$_POST['value1'];
	$champ1=$_POST['name1'];
	$key2=$_POST['key2'];
	$value2=$_POST['value2'];
	$champ2=$_POST['name2'];
	
	
echo $ch;
 echo	$key1 ;
 echo $value1 ;
echo	$champ1 ;
echo	$key2 ;
echo	$value2 ;
echo	$champ2 ;
	
	//$json[$id]=$ch;
   // $ch="hlhkhkhkhkhkkhkhkhkhkkkhkhh";
	 // 
	 
 $json[$key]{$champ}=$ch;
	$new= json_encode($json);
	file_put_contents('htmljson.json',$new);
 }
 

 
 
?>