<?php
	session_start();
	$id = $_REQUEST['x'];
	unset($_SESSION['cart'][$id]);
	echo'<script type="text/javascript">window.location=\''.$_SERVER['HTTP_REFERER'].'\';</script>';
?>
