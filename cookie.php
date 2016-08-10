<?php
if(!isset($_COOKIE["user"])) {
    require_once 'manage_user.php';
} else {
	$user_identifier = $_COOKIE["user"];
}
?>