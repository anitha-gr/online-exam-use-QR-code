<?php
session_start();
include("db.php");
$flag=true;
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
<script type="text/javascript">
function check() {
if(!f.a[0].checked && !f.a[1].checked && !f.a[2].checked && !f.a[3].checked) {
window.alert("Select any Answer")
return false
}
return true
}

function readCookie()

{

  var cookieValue1 = "";
  var cookieValue2 = "";
  var cookieValue3 = "";
  var name1="hh";
  var name2="mm";
  var name3="ss";
  var hours="1";

  var search1 = name1 + "=";
  var search2 = name2 + "=";
  var search3 = name3 + "=";

  if(document.cookie.length > 0)  { 

    offset1 = document.cookie.indexOf(search1);
    offset2 = document.cookie.indexOf(search2);
    offset3 = document.cookie.indexOf(search3);

    if (offset1 != -1)   { 
      offset1 += search1.length;

      end1 = document.cookie.indexOf(";", offset1);

      if (end1 == -1) end1 = document.cookie.length;

      cookieValue1 = unescape(document.cookie.substring(offset1, end1))
    }
    if (offset2 != -1)   { 
      offset2 += search2.length;

      end2 = document.cookie.indexOf(";", offset2);

      if (end2 == -1) end2 = document.cookie.length;

      cookieValue2 = unescape(document.cookie.substring(offset2, end2))
    }
    if (offset3 != -1)   { 
      offset3 += search1.length;

      end3 = document.cookie.indexOf(";", offset3);

      if (end3 == -1) end3 = document.cookie.length;

      cookieValue3 = unescape(document.cookie.substring(offset3, end3))
    }

  }

  document.getElementById("ddd").innerHTML=cookieValue1+":"+cookieValue2+":"+cookieValue3
  cookieValue1=parseInt(cookieValue1);
  cookieValue2=parseInt(cookieValue2);
  cookieValue3=parseInt(cookieValue3)-1;

  if(cookieValue3==0) {
  cookieValue2--;
  cookieValue3=59;
  }
  if(cookieValue2==0) {
  window.navigate("logout.php");
  }

if(hours != null)

  {

    expire = new Date((new Date()).getTime() + hours * 3600000);

    expire = "; expires=" + expire.toGMTString();

  }

  document.cookie = name1 + "=" + escape(cookieValue1) + expire;
  document.cookie = name2 + "=" + escape(cookieValue2) + expire;
  document.cookie = name3 + "=" + escape(cookieValue3) + expire;
  window.setTimeout("readCookie()","1000");
}
</script>
</head>
<body onload="readCookie()" bgcolor="#d7d4d4" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
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
			echo "Hello <b>".$_SESSION['username'].", </b>";
//			echo "<A HREF='logout.php'>Logout</A>";
			echo "<div id='ddd' align='right' style='width:50%;float:right;'></div>";
if(isset($_REQUEST['sub'])) {
$sub=$_REQUEST['sub'];
if($sub=="PHP")
$tab="qtab";
else if($sub=="general")
$tab="gtab";
else if($sub=="java")
$tab="jtab";
$_SESSION['tab']=$tab;
}
if(!isset($_POST['submit'])&&!isset($_POST['submmit'])) {
if(!isset($_SESSION['qno'])&&!isset($_SESSION['max_qno'])) {
$rs1=mysql_query("select max(id) from $_SESSION[tab]") or die(mysql_error());
$r1=mysql_fetch_row($rs1);
$_SESSION['max_qno']=$r1[0];
$rs=mysql_query("select min(id) from $_SESSION[tab]") or die(mysql_error());
$r=mysql_fetch_row($rs);
$_SESSION['qno']=$r[0];
$rs=mysql_query("select * from $_SESSION[tab] where id=$_SESSION[qno]") or die(mysql_error());
$r=mysql_fetch_row($rs);
} else {
	do {
		if($_SESSION['qno']==$_SESSION['max_qno']) {
		$flag=false;
		break;
		}
	$_SESSION['qno']++;
	$rs=mysql_query("select * from $_SESSION[tab] where id=$_SESSION[qno]") or die(mysql_error());
//	echo "<script type='text/javascript'>window.alert('".$_SESSION['qno']."')</script>";
	} while(mysql_num_rows($rs)==0);
if($flag==true) {
$r=mysql_fetch_row($rs);
}
}
if($flag==true) {
		?></DIV>
<form name="f" action="questiondisplay.php" method="post" onsubmit="return check()">
<table align="center" border="1" style="table-layout:fixed;">
<tr>
<th width="70">Question</th>
<th align="left"><?php echo $r[1]?></th>
</tr>
<tr>
<td><input type="radio" name="a[]" id="a" value="<?php echo $r[2]?>"></td>
<td><?php echo $r[2]?></td>
</tr>
<tr>
<td><input type="radio" name="a[]" id="a" value="<?php echo $r[3]?>"></td>
<td><?php echo $r[3]?></td>
</tr>
<tr>
<td><input type="radio" name="a[]" id="a" value="<?php echo $r[4]?>"></td>
<td><?php echo $r[4]?></td>
</tr>
<tr>
<td><input type="radio" name="a[]" id="a" value="<?php echo $r[5]?>"></td>
<td><?php echo $r[5]?></td>
</tr>
<tr>
<td colspan="2" align="right">
<input type="submit" name="submmit" value="Previous">
<?php
if($_SESSION['qno']==$_SESSION['max_qno']) {
?>
<input type="submit" name="submit" value="Finish">
<?php
}
else {
?>
<input type="submit" name="submit" value="Next">
<?php
}
?>
</td>
</tr>
</table>
</form>
<?php
$rs2=mysql_query("select answer from answers where qno=$_SESSION[qno]") or die(mysql_error());
if(mysql_num_rows($rs2)>0) {
	$r2=mysql_fetch_row($rs2);
$rs3=mysql_query("select ans1 from $_SESSION[tab] where ans1='$r2[0]' and id=$_SESSION[qno]") or die(mysql_error());
if(mysql_num_rows($rs3)>0) {
$r3=mysql_fetch_row($rs3);
echo "<script type='text/javascript'>f.a[0].checked=true</script>";
}

$rs3=mysql_query("select ans2 from $_SESSION[tab] where ans2='$r2[0]' and id=$_SESSION[qno]") or die(mysql_error());
if(mysql_num_rows($rs3)>0) {
$r3=mysql_fetch_row($rs3);
echo "<script type='text/javascript'>f.a[1].checked=true</script>";
}

$rs3=mysql_query("select ans3 from $_SESSION[tab] where ans3='$r2[0]' and id=$_SESSION[qno]") or die(mysql_error());
if(mysql_num_rows($rs3)>0) {
$r3=mysql_fetch_row($rs3);
echo "<script type='text/javascript'>f.a[2].checked=true</script>";
}

$rs3=mysql_query("select ans4 from $_SESSION[tab] where ans4='$r2[0]' and id=$_SESSION[qno]") or die(mysql_error());
if(mysql_num_rows($rs3)>0) {
$r3=mysql_fetch_row($rs3);
echo "<script type='text/javascript'>f.a[3].checked=true</script>";
}

}

} else {
	echo "<center>Exam Ends...<br><br>";
$rrrs=mysql_query("select question,answer,ans from $_SESSION[tab],answers where id=qno order by id") or die(mysql_error());
echo "<table border='1' align='center' style='font-size:12px;'><tr><th colspan='3'>REVIEW</th></tr><tr><th>Question</th><th>Your Answer</th><th>Correct Answer</th></tr>";
while($rrr=mysql_fetch_row($rrrs)) {
echo "<tr>";
if($rrr[1]==$rrr[2])
echo "<td>$rrr[0]</td><td><font color='green'>$rrr[1]</font></td><td>$rrr[2]</td>";
else
echo "<td>$rrr[0]</td><td><font color='red'>$rrr[1]</font></td><td>$rrr[2]</td>";
echo "</tr>";
}
echo "</table><br><br>";
	echo "<A HREF='logout.php'>Show Result</A></center>";
}
}
else if(isset($_POST['submit'])) {
	if(isset($_POST['a'])) {
	$qno=$_SESSION['qno'];
	$ans=$_POST['a'];
	$rs=mysql_query("select * from answers where qno=$qno") or die(mysql_error());
	if(mysql_num_rows($rs)>0) {
	mysql_query("update answers set answer='$ans[0]' where qno=$qno") or die(mysql_error());
	}
	else {
	mysql_query("insert into answers values ($qno,'$ans[0]')") or die(mysql_error());
	}

	header('Location:questiondisplay.php');
	}
}
else if(isset($_POST['submmit'])) {
	if(isset($_POST['a'])) {
	$qno=$_SESSION['qno'];
	$ans=$_POST['a'];
	$rs=mysql_query("select * from answers where qno=$qno") or die(mysql_error());
	if($qno!=1) {
	if(mysql_num_rows($rs)>0) {
	mysql_query("update answers set answer='$ans[0]' where qno=$qno") or die(mysql_error());
	}
	else {
	mysql_query("insert into answers values ($qno,'$ans[0]')") or die(mysql_error());
	}
	$_SESSION['qno']-=2;
	header('Location:questiondisplay.php');
	} else {
	if(mysql_num_rows($rs)>0) {
	mysql_query("update answers set answer='$ans[0]' where qno=$qno") or die(mysql_error());
	}
	else {
	mysql_query("insert into answers values ($qno,'$ans[0]')") or die(mysql_error());
	}
	$_SESSION['qno']--;
	header('Location:questiondisplay.php');
	}
	}
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