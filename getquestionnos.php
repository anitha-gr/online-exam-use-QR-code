<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("online_exam_db") or die(mysql_error());
		$qcat = $_GET['qcat'];
	if($qcat=="PHP")
	$rs = mysql_query("select id from qtab") or die(mysql_error());
	else if($qcat=="general")
	$rs = mysql_query("select id from gtab") or die(mysql_error());
	else if($qcat=="java")
	$rs = mysql_query("select id from jtab") or die(mysql_error());

	if(mysql_num_rows($rs)>0) {
	echo "<select name='t8'>";
	while($r = mysql_fetch_row($rs))
	echo "<option value='$r[0]'>$r[0]</option>";
	echo "</select>";
	} else {
	echo "<select name='t8'>";
	echo "<option value='0'>0</option>";
	echo "</select>";
	}
?>