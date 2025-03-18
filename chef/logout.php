<?php

    session_start();
    if(isset($_SESSION['chef_id'])){
	session_unset();
	session_destroy();
	header("Location:../chef_log.php?logout=You are logged out");
    exit();
}
