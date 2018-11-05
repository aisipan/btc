<?php 

$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=reklame_db user=postgres options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
// $result = pg_query($conn, "select * from t_reklame");
// echo "<pre>";
// var_dump(pg_fetch_all($result));
// echo "</pre>";


 ?>