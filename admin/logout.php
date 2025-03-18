<?php

    session_start();
    if(isset($_SESSION['admin_id'])){
	session_unset();
	session_destroy();
	header("Location:../admin_log.php?logout=You are logged out");
    exit();
}
