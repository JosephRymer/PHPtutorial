<?php // Used for Connection to the Database
	define  ('db_user', 'root');
	define  ('db_password', '');
	define  ('db_host', 'localhost');
	define ('db_database', 'validation');
	$dbc = @mysqli_connect(db_host,db_user,db_password,db_database) OR die('Could not Connect to mySQL' . mysqli_connect_error());
?>