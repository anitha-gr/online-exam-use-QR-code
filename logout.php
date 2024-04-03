<?php
session_start();
include("db.php");
//include ("session.php");
if (isset($_SESSION['username'])){// and $semester) {
$username=$_SESSION['username'];
?>
<html>
<head>
<title>register</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, sans-serif}
.style1 {font-size:smaller}
.style2 {font-family:Verdana, Arial, sans-serif}
.style2 {color:#FF0000}
.style2 {font-size:9px}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body bgcolor="#d7d4d4" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (register.psd) -->
<table id="Table_01" width="1025" height="769" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2">
			<img src="images_exam/exam_01.gif" width="114" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_exam/exam_02.gif" width="157" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_exam/exam_03.gif" width="159" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_exam/exam_04.gif" width="149" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_exam/exam_05.gif" width="147" height="120" alt="" /></td>
		<td>
			<img src="images_exam/exam_06.gif" width="130" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_exam/exam_07.gif" width="168" height="120" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="120" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_exam/exam_08.gif" width="113" height="16" alt="" /></td>
		<td colspan="14" rowspan="2">
			<img src="images_exam/exam_09.gif" width="787" height="87" alt="" /></td>
		<td rowspan="15">
			<img src="images_exam/exam_10.gif" width="124" height="648" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="16" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="Welcome.html"><img src="images_exam/exam_11.gif" name="btn1" width="113" height="106" border="0" onMouseOver="btn1.src='images_exam/exam01_11.gif'" onMouseOut="btn1.src='images_exam/exam_11.gif'" /></a></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="71" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images_exam/exam_12.gif" width="27" height="26" alt="" /></td>
		<td colspan="10" rowspan="11"><DIV class="style1">
		<?php  //$subjects = "C";
			
//			echo "Hello <b>".$_SESSION['username'].", </b>";
			//echo $password." ".$semester;
			echo "<BR><BR><BR>";
			echo "<HTML><BODY>";
if($_SESSION['username']!="admin") {
$mark=0;
$rs=mysql_query("select * from answers") or die(mysql_error());
$minus=array();
while($r=mysql_fetch_row($rs)) {
	$rs1=mysql_query("select * from $_SESSION[tab] where id=$r[0]") or die(mysql_error());
	$r1=mysql_fetch_row($rs1);
	if($r[1]==$r1[6])
	$mark++; 
	else {
		if($r1[7]!=0)
		$minus[]=$r1[7];
	}
}
	$minus = array_unique($minus);
	//print_r($minus);
	$mmark=0;
	foreach($minus as $m) {
	$nresult = mysql_query("select count(*) from $_SESSION[tab] where rqno=$m");
	$nr = mysql_fetch_row($nresult);
		if($m==1 || $nr[0]==1)
		$mmark+=$nr[0];
		else
		$mmark+=($nr[0]);
	}
	//echo $mark.">".$mmark;
	$newmark = $mark-$mmark;
$rs2=mysql_query("select count(*) from $_SESSION[tab]") or die(mysql_error());
$r2=mysql_fetch_row($rs2);
//$per=($mark/$r2[0])*100;
$per=($newmark/$r2[0])*100;
$per=round($per,2);
	mysql_query("delete from answers") or die(mysql_error());
$dt=date('Y-m-d h:i',(time()-23400));
$username=$_SESSION['username'];
$sub="PHP";
if($_SESSION['tab']=="qtab")
$sub="PHP";
else if($_SESSION['tab']=="gtab")
$sub="General";
else if($_SESSION['tab']=="jtab")
$sub="Java";
	mysql_query("insert into marks (username,perc,examdate,subject) values ('$username',$per,'$dt','$sub')") or die(mysql_error());
echo "<div align='center'>Mr.$username you have gained $per%</div>";
}
session_destroy();
echo "<div align='center'><br>You have Successfully Logged Out!<br><br><a href='index.html'>Home</a></div>";
		?></DIV></td>
		<td>
			<img src="images_exam/exam_14.gif" width="28" height="26" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_exam/exam_15.gif" width="2" height="9" alt="" /></td>
		<td rowspan="3">
			<img src="images_exam/exam_16.gif" width="25" height="139" alt="" /></td>
		<td rowspan="3">
			<img src="images_exam/exam_17.gif" width="28" height="139" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="9" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href="login.php"><img src="images_exam/exam_18.gif" name="btn2" width="115" height="104" border="0" id="btn2" onMouseOver="btn2.src='images_exam/exam01_18.gif'" onMouseOut="btn2.src='images_exam/exam_18.gif'" /></a></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="104" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_exam/exam01_19.gif" width="115" height="106" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_exam/exam_20.gif" width="25" height="122" alt="" /></td>
		<td rowspan="2">
			<img src="images_exam/exam_21.gif" width="28" height="122" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="80" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="contact.html"><img src="images_exam/exam_22.gif" name="btn3" width="115" height="96" border="0" id="btn3" onMouseOver="btn3.src='images_exam/exam01_22.gif'" onMouseOut="btn3.src='images_exam/exam_22.gif'" /></a></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="42" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_exam/exam_23.gif" width="25" height="86" alt="" /></td>
		<td rowspan="2">
			<img src="images_exam/exam_24.gif" width="28" height="86" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="54" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="aboutus.html"><img src="images_exam/exam_25.gif" name="btn4" width="113" height="105" border="0" id="btn4" onMouseOver="btn4.src='images_exam/exam01_25.gif'" onMouseOut="btn4.src='images_exam/exam_25.gif'" /></a></td>
		<td colspan="2">
			<img src="images_exam/exam_26.gif" width="2" height="32" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="32" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_exam/exam_27.gif" width="27" height="124" alt="" /></td>
		<td rowspan="2">
			<img src="images_exam/exam_28.gif" width="28" height="124" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="73" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images_exam/exam_29.gif" width="113" height="115" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="51" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_exam/exam_30.gif" width="27" height="47" alt="" /></td>
		<td rowspan="2">
			<img src="images_exam/exam_31.gif" width="28" height="47" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="35" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_exam/exam_32.gif" width="209" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_exam/exam_33.gif" width="116" height="12" alt="" /></td>
		<td>
			<img src="images_exam/exam_34.gif" width="27" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_exam/exam_35.gif" width="126" height="12" alt="" /></td>
		<td colspan="3">
			<img src="images_exam/exam_36.gif" width="254" height="12" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="12" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_exam/exam_37.gif" width="1" height="17" alt="" /></td>
		<td colspan="13">
			<img src="images_exam/exam_38.gif" width="786" height="17" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="17" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_exam/spacer.gif" width="113" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="25" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="131" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="78" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="81" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="35" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="27" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="87" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="39" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="108" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="130" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="16" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="28" height="1" alt="" /></td>
		<td>
			<img src="images_exam/spacer.gif" width="124" height="1" alt="" /></td>
		<td></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>

<?php
}

else {
	$message = "You have not logged in!!";
	$messageencode = base64_encode($message);
	echo "<SCRIPT LANGUAGE='JAVASCRIPT'> window.location='login.php?erruserid=$messageencode' </SCRIPT>";
}
?>