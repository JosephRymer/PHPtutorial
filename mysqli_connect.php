<?php // Used for Connection to the Database
	define  ('db_user', 'root');
	define  ('db_password', '');
	define  ('db_host', 'localhost');
	define ('db_database', 'validation');
	$dbc = mysql_connect(db_host,db_user,db_password);
    mysql_select_db(db_database, $dbc);
?>