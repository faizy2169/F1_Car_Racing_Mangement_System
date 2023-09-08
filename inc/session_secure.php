<?php 
if (!isset($_SESSION['partner_login'])) {
	header("Location: login.php");
}
$session_value=$_SESSION['partner_login'];
$sess_con=array('id' => $session_value);
$login_row=$fun->one_value("partner",$sess_con);
 ?>