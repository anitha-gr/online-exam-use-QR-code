<?php
session_start();
include("db.php");
	$id=$_POST['id'];
$rs=mysql_query("select * from $_SESSION[tab] where id=$id") or die(mysql_error());
$r=mysql_fetch_row($rs);
echo "$r[1]*$r[2]&$r[3]#$r[4]@$r[5]!$r[6]";
mysql_free_result($rs);
?>