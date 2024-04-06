<?php
//PDO連接資料庫語法
$db = new PDO('mysql:host=localhost;dbname=sldeercom_SQL','root','jiesheng15195151');
//使用UTF8
$db->exec("SET CHARACTER SET utf8");   //轉UTF8
?>


