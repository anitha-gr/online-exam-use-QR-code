<?php
session_start();
//include ("session.php");
if (isset($_SESSION['username']) && $_SESSION['username']=="admin"){// and $semester) {
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
.ar{text-align:right}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function check() {
if(f.t1.value==""||f.t2.value==""||f.t3.value==""||f.t4.value==""||f.t5.value==""||f.t6.value==""||f.t7.value=="") {
window.alert("Field is Empty... Cant Submit !")
return false
}
return true
}
function call1(p) {
if(p!="") {
	ob1 = getObject()
	ob1.onreadystatechange=doWork1
	ob1.open("GET","getquestionnos.php?qcat="+p,true)
	ob1.send()
} else {
	document.getElementById("div_qno").innerHTML="<select name='t8'><option value=''>Select</option></select>"
}
}
function getObject() {
	if(window.ActiveXObject)
	return new ActiveXObject("Microsoft.XMLHTTP")
	else
	return new XMLHttpRequest()
}
function doWork1() {
	if(ob1.readyState==4 && ob1.status==200) {
	document.getElementById("div_qno").innerHTML=ob1.responseText
	}
}
</script>
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
			<a href="#"><img src="images_exam/exam_11.gif" name="btn1" width="113" height="106" border="0" onMouseOver="btn1.src='images_exam/exam01_11.gif'" onMouseOut="btn1.src='images_exam/exam_11.gif'" /></a></td>
		<td>
			<img src="images_exam/spacer.gif" width="1" height="71" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images_exam/exam_12.gif" width="27" height="26" alt="" /></td>
<td colspan="10" rowspan="11"><DIV class="style1">
		<?php  //$subjects = "C";
			echo "Hello <b>".$_SESSION['username'].", </b><br>";
			echo "<center><a href='adminhome.php'>Question Master</a>&nbsp;&nbsp;<a href='editquestion1.php'>Edit Question</a>&nbsp;&nbsp;<a href='viewallmarks.php'>View Marks</a>&nbsp;&nbsp;<A HREF='logout.php'>Logout</A></center>";
		?></DIV>
<form name="f" action="adminhome.php" method="post" onsubmit="return check()">
<table align="center">
<tr>
<th colspan="2">Examination Questions</th>
</tr>
<tr>
<th class="ar">Question</th>
<th align="left"><textarea name="t1" cols="40" rows="5"></textarea></th>
</tr>
<tr>
<td class="ar">Answer1</td>
<td><input type="text" name="t2" size="50"></td>
</tr>
<tr>
<td class="ar">Answer2</td>
<td><input type="text" name="t3" size="50"></td>
</tr>
<tr>
<td class="ar">Answer3</td>
<td><input type="text" name="t4" size="50"></td>
</tr>
<tr>
<td class="ar">Answer4</td>
<td><input type="text" name="t5" size="50"></td>
</tr>
<tr>
<td class="ar">Correct Answer</td>
<td><input type="text" name="t6" size="50"></td>
</tr>
<tr>
<td class="ar">Exam Category</td>
<td>
<select name="t7" onchange="call1(this.value)">
<option value="">Select</option>
<option value="PHP">PHP</option>
<option value="general">General</option>
<option value="java">JAVA</option>
</select>
</td>
</tr>

<tr>
<td class="ar">Related Question No</td>
<td>
<div id="div_qno">
<select name="t8">
<option value="">Select</option>
</select>
</div>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])) {
include("db.php");
	$q=$_POST['t1'];
	$a1=$_POST['t2'];
	$a2=$_POST['t3'];
	$a3=$_POST['t4'];
	$a4=$_POST['t5'];
	$ca=$_POST['t6'];
	$cat=$_POST['t7'];
	$rqno=$_POST['t8'];
if($cat=="PHP")
mysql_query("insert into qtab (question,ans1,ans2,ans3,ans4,ans,rqno) values ('$q','$a1','$a2','$a3','$a4','$ca',$rqno)") or die(mysql_error());
else if($cat=="general")
mysql_query("insert into gtab (question,ans1,ans2,ans3,ans4,ans,rqno) values ('$q','$a1','$a2','$a3','$a4','$ca',$rqno)") or die(mysql_error());
else if($cat=="java")
mysql_query("insert into jtab (question,ans1,ans2,ans3,ans4,ans,rqno) values ('$q','$a1','$a2','$a3','$a4','$ca',$rqno)") or die(mysql_error());
header('Location:adminhome.php');
}
?>
</td>
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
			<a href="#"><img src="images_exam/exam_18.gif" name="btn2" width="115" height="104" border="0" id="btn2" onMouseOver="btn2.src='images_exam/exam01_18.gif'" onMouseOut="btn2.src='images_exam/exam_18.gif'" /></a></td>
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
			<a href="#"><img src="images_exam/exam_22.gif" name="btn3" width="115" height="96" border="0" id="btn3" onMouseOver="btn3.src='images_exam/exam01_22.gif'" onMouseOut="btn3.src='images_exam/exam_22.gif'" /></a></td>
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
			<a href="#"><img src="images_exam/exam_25.gif" name="btn4" width="113" height="105" border="0" id="btn4" onMouseOver="btn4.src='images_exam/exam01_25.gif'" onMouseOut="btn4.src='images_exam/exam_25.gif'" /></a></td>
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