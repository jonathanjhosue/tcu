<?php
$hostname_cnx_2night = "localhost";
$database_cnx_2night = "db_surf";
$username_cnx_2night = "root";
$password_cnx_2night = "";

$cnx_2night = mysql_pconnect($hostname_cnx_2night, $username_cnx_2night, $password_cnx_2night) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_cnx_2night,$cnx_2night); 

if(!isset($_SESSION)){
			session_start();
		}
?>