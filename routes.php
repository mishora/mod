<?php
switch ($_GET['module']) {
	case 'user' :
			require_once 'users.php';
			break;
	case 'post' :
			require_once 'posts.php';
			break;
}
?>
