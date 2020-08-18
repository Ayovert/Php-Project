<?php

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
    header('location: ../myaccount.php');
}
?>
