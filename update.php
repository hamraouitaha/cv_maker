<?php
$a = file_get_contents("php://input");
file_put_contents('http://localhost/movies.json', json_encode($a));
?>