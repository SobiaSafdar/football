<?php ob_start();
session_start();
if((!isset($_SESSION['session_admin_id']))   )
    {
            header("Location: index.php");
    }
?>
	