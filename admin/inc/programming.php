<?php 
session_start();
include "../classes/all_function.php";
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
}
$data=array(
		'id'=> $_SESSION['admin']
	);
	$value=$fun->one_value("admin",$data);
 ?>