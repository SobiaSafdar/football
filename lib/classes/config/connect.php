<?php

	if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1'){
	$databaseConfig = array(
		"type" => "MySQLDatabase",
		"server" => "localhost",
		"username" => 'root',
		"password" => 'vertrigo',
		"database" => str_replace('"',"", "db_settlement")
	);
	} else {
            
		$databaseConfig = array(
		"type" => "MySQLDatabase",
		"server" => "mysql6.000webhost.com",
		"username" => str_replace('"',"","a3820187_user"),
		"password" => str_replace('"',"","a3820187_user1234"),
		"database" => str_replace('"',"", "a3820187_db")
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
	
?>
