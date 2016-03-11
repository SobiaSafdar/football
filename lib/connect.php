<?php

	if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1'){
	$databaseConfig = array(
		"type" => "MySQLDatabase",
		"server" => "localhost",
		"username" => 'root',
		"password" => 'vertrigo',
		"database" => str_replace('"',"", "idavies")
	);
	} else {
		$databaseConfig = array(
		"type" => "MySQLDatabase",
		"server" => "localhost",
		"username" => str_replace('"',"",""),
		"password" => str_replace('"',"",""),
		"database" => str_replace('"',"", "")
	);
	}
	
	if(empty($databaseConfig['password']))$databaseConfig['password']="";
	$link  = mysqli_connect($databaseConfig['server'],trim($databaseConfig['username']),trim($databaseConfig['password']),trim($databaseConfig['database']));
       if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
	}
        else
            {
           //echo "connected";
        }
//define("SSL_INSTALLED",1);
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1'){
	define("SITE_ADDRESS","http://".$_SERVER['SERVER_NAME']."/idavies/");
}else{
//	if(SSL_INSTALLED == 1 && $_SERVER['SERVER_NAME'] != 'employee_project.com'){
//		$http = "https";
//	}else{
//		$http = "http";
//	}
	define("SITE_ADDRESS","http://".$_SERVER['SERVER_NAME']."/idavies/");     
}
?>

