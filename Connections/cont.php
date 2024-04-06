<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cont = "localhost";
$database_cont = "sldeercom_SQL";
$username_cont = "root";
$password_cont = "jiesheng15195151";
$cont = mysql_pconnect($hostname_cont, $username_cont, $password_cont) or trigger_error(mysql_error(),E_USER_ERROR); 
?>