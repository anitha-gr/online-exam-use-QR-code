<html>
<head>
<title>About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body bgcolor="#d7d4d4" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table id="Table_01" width="1025" height="769" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2">
			<img src="images_aboutus/aboutus_01.gif" width="114" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_aboutus/aboutus_02.gif" width="157" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_aboutus/aboutus_03.gif" width="159" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_aboutus/aboutus_04.gif" width="149" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_aboutus/aboutus_05.gif" width="147" height="120" alt="" /></td>
		<td>
			<img src="images_aboutus/aboutus_06.gif" width="130" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_aboutus/aboutus_07.gif" width="168" height="120" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="120" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_aboutus/aboutus_08.gif" width="113" height="16" alt="" /></td>
		<td colspan="14" rowspan="2">
			<img src="images_aboutus/aboutus_09.gif" width="787" height="87" alt="" /></td>
		<td rowspan="15">
			<img src="images_aboutus/aboutus_10.gif" width="124" height="648" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="16" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="Welcome.html"><img src="images_aboutus/aboutus_11.gif" name="btn1" width="113" height="106" border="0" id="btn1" onMouseOver="btn1.src='images_aboutus/aboutus1_11.gif'" onMouseOut="btn1.src='images_aboutus/aboutus_11.gif'" /></a></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="71" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images_aboutus/aboutus_12.gif" width="27" height="26" alt="" /></td>
<td colspan="10" rowspan="11"><p class="style1">Top 3 Scorers</p>
	    <p align="center" class="style1"><!--img src="Suhas_10.jpg" width="301" height="386"-->&nbsp;  &nbsp;&nbsp;</p>
<?php
include("db.php");
$rs=mysql_query("select username,perc,examdate,subject from marks order by perc desc limit 3") or die(mysql_error());
?>
<table border="1" align="center">
<tr>
<th>UserName</th>
<th>Percentage Obtained</th>
<th>Exam Date</th>
<th>Subject</th>
</tr>
<?php
while($r=mysql_fetch_row($rs)) {
echo "<tr><td>".strtoupper($r[0])."</td><td align='center'><b>$r[1]%</b></td><td>$r[2]</td><td>$r[3]</td></tr>";
}
?>
</table>
</td>

<td>
			<img src="images_aboutus/aboutus_14.gif" width="28" height="26" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_aboutus/aboutus_15.gif" width="2" height="9" alt="" /></td>
		<td rowspan="3">
			<img src="images_aboutus/aboutus_16.gif" width="25" height="139" alt="" /></td>
		<td rowspan="3">
			<img src="images_aboutus/aboutus_17.gif" width="28" height="139" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="9" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href="login.php"><img src="images_aboutus/aboutus_18.gif" name="btn2" width="115" height="104" border="0" onMouseOver="btn2.src='images_aboutus/aboutus1_18.gif'" onMouseOut="btn2.src='images_aboutus/aboutus_18.gif'" /></a></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="104" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="register.php"><img src="images_aboutus/aboutus_19.gif" name="btn3" width="115" height="106" border="0" onMouseOver="btn3.src='images_aboutus/aboutus1_19.gif'" onMouseOut="btn3.src='images_aboutus/aboutus_19.gif'" /></a></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_20.gif" width="25" height="122" alt="" /></td>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_21.gif" width="28" height="122" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="80" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="contact.html"><img src="images_aboutus/aboutus_22.gif" name="btn4" width="115" height="96" border="0" onMouseOver="btn4.src='images_aboutus/aboutus1_22.gif'" onMouseOut="btn4.src='images_aboutus/aboutus_22.gif'" /></a></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="42" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_23.gif" width="25" height="86" alt="" /></td>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_24.gif" width="28" height="86" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="54" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_25.gif" width="113" height="105" alt="" /></td>
		<td colspan="2">
			<img src="images_aboutus/aboutus_26.gif" width="2" height="32" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="32" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_aboutus/aboutus_27.gif" width="27" height="124" alt="" /></td>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_28.gif" width="28" height="124" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="73" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images_aboutus/aboutus_29.gif" width="113" height="115" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="51" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_aboutus/aboutus_30.gif" width="27" height="47" alt="" /></td>
		<td rowspan="2">
			<img src="images_aboutus/aboutus_31.gif" width="28" height="47" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="35" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_aboutus/aboutus_32.gif" width="209" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_aboutus/aboutus_33.gif" width="116" height="12" alt="" /></td>
		<td>
			<img src="images_aboutus/aboutus_34.gif" width="27" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_aboutus/aboutus_35.gif" width="126" height="12" alt="" /></td>
		<td colspan="3">
			<img src="images_aboutus/aboutus_36.gif" width="254" height="12" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="12" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_aboutus/aboutus_37.gif" width="1" height="17" alt="" /></td>
		<td colspan="13">
			<img src="images_aboutus/aboutus_38.gif" width="786" height="17" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="17" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_aboutus/spacer.gif" width="113" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="25" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="131" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="78" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="81" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="35" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="27" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="87" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="39" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="108" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="130" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="16" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="28" height="1" alt="" /></td>
		<td>
			<img src="images_aboutus/spacer.gif" width="124" height="1" alt="" /></td>
		<td></td>
	</tr>
</table>
</body>
</html>