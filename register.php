<html>
<head>
<title>Registration Form</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, sans-serif}
.style1 {font-size:smaller}
.style2 {font-family:Verdana, Arial, sans-serif}
.style2 {color:#FF0000}
.style2 {font-size:9px}
-->
</style>
<script type="text/javascript">
function check() {
if(f.username.value==""||f.fullname.value==""||f.password.value==""||f.retypepass.value==""||f.emailid.value==""||f.unicol.value==""||f.age.value==""||f.city.value==""||f.country.value=="") {
window.alert("Field is Empty... Cannot Submit !")
return false
}
if(f.password.value!=f.retypepass.value) {
window.alert("Confirm password does not Match !")
f.retypepass.focus()
return false
}
return true
}
</script>
</head>
<body bgcolor="#d7d4d4" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table id="Table_01" width="1025" height="769" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2">
			<img src="images_register/register_01.gif" width="114" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_register/register_02.gif" width="157" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_register/register_03.gif" width="159" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_register/register_04.gif" width="149" height="120" alt="" /></td>
		<td colspan="2">
			<img src="images_register/register_05.gif" width="147" height="120" alt="" /></td>
		<td>
			<img src="images_register/register_06.gif" width="130" height="120" alt="" /></td>
		<td colspan="3">
			<img src="images_register/register_07.gif" width="168" height="120" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="120" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_register/register_08.gif" width="113" height="16" alt="" /></td>
		<td colspan="14" rowspan="2">
			<img src="images_register/register_09.gif" width="787" height="87" alt="" /></td>
		<td rowspan="15">
			<img src="images_register/register_10.gif" width="124" height="648" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="16" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="3">
			<a href="Welcome.html"><img src="images_register/register_11.gif" name="btn3" width="113" height="106" border="0" onMouseOver="btn3.src='images_register/register1_11.gif'" onMouseOut="btn3.src='images_register/register_11.gif'" /></a></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="71" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images_register/register_12.gif" width="27" height="26" alt="" /></td>
<form name="f" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return check()">
		<td colspan="10" rowspan="11">
<?php
include("db.php");
if(!isset($_POST['submit'])) {
?>
<table width="677" border="0">
          <tr>
            <td width="338"><div align="right" class="style1">Username</div></td>
            <td width="329"><input type="text" name="username" /><!--div class="style2"><b><?php 	$errunavaildecode = base64_decode($erruserid); echo $errunavaildecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">Name</span></div></td>
            <td><input type="text" name="fullname" /><!--div class="style2"><b><?php 	$errnamedecode = base64_decode($errname); echo $errnamedecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">Password</span></div></td>
            <td><input name="password" type="password" id="password" /> <!--div class="style2"><b><?php 	$errpassworddecode = base64_decode($errpassword); echo $errpassworddecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">Retype Password </span></div></td>
            <td><input name="retypepass" type="password" id="retypepass" /> <!--div class="style2"><b><?php 	$errretypepassworddecode = base64_decode($errretypepassword); echo $errretypepassworddecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">e-mail Address </span></div></td>
            <td><input type="text" name="emailid"> <!--div class="style2"><b><?php 	$erremailiddecode = base64_decode($erremailid); echo $erremailiddecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">University/College</span></div></td>
            <td><input type="text" name="unicol"><!--div class="style2"><b><?php 	$errunicoldecode = base64_decode($errunicol); echo $errunicoldecode; ?></b></div--></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">Gender</span></div></td>
            <td><p>
              <label>
                <input name="gender" type="radio" value="male" checked>
                <span class="style1">male</span></label>
              <label>
                <input type="radio" name="gender" value="female">
                <span class="style1">female</span></label>
              <br>
            </p></td>
          </tr>
          <tr>
            <td><div align="right"><span class="style1">Age</span></div></td>
            <td><input name="age" type="text" size="4" maxlength="2"><!--div class="style2"><b><?php $erragedecode = base64_decode($errage); echo $erragedecode; ?></b></div--></td>
          </tr>          
          <tr>
            <td><div align="right"><span class="style1">City</span></div></td>
            <td><input type="text" name="city"></td>
          </tr>
          <tr>
            <td><div align="right" class="style1">Country</div></td>
            <td><input type="text" name="country"></td>
          </tr>
	<tr>
            <td><div align="right" class="style1">Your Iris Image</div></td>
            <td><input type="file" name="iris" required></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>            
            <td colspan="2" align="center"><input type="submit" name="submit" value="submit">&nbsp;<input type="reset" value="Clear"></td>
          </tr>
          </form>
        </table>
<?php
}else if(isset($_POST['submit'])) {
	if(is_uploaded_file($_FILES['iris']['tmp_name'])) {
	$username=$_POST['username'];
	$fullname=$_POST['fullname'];
	$password=$_POST['password'];
	$retypepass=$_POST['retypepass'];
	$emailid=$_POST['emailid'];
	$unicol=$_POST['unicol'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$city=$_POST['city'];
	$country=$_POST['country'];

		$fname="uploads/".time().$_FILES['iris']['name'];
		$ftype = $_FILES['iris']['type'];
		$fsize = $_FILES['iris']['size'];
		move_uploaded_file($_FILES['iris']['tmp_name'],$fname) or die("Cant move file");
		$offset = ($fsize>1600)?1600:$fsize;
		$qrname = "uploads/".time()."qr.png";

		$fh = fopen($fname,"r");
		$c = fread($fh,$offset);
		fclose($fh);
	include './phpqrcode/qrlib.php';
	QRcode::png($c,$qrname);
		
	mysql_query("insert into loginform (username,name,password,retypepassword,emailaddress,unicol,gender,age,city,country) values ('$username','$fullname','$password','$retypepass','$emailid','$unicol','$gender',$age,'$city','$country')") or die(mysql_error());
	mysql_query("insert into login (username,password) values ('$username','$password')") or die(mysql_error());
	mysql_query("insert into uploads (username,fname,qrname) values ('$username','$fname','$qrname')");
	echo "<center>Your QRImage : <img src='$qrname' width='200px'></center>";
	} else {
	echo "<center>Iris Image Not Uploaded</center>";
	}
	//header('Location:register.php');
	echo "<br><center><a href='register.php'>Back</a></center>";
}
?>
</td>
		<td>
			<img src="images_register/register_14.gif" width="28" height="26" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_register/register_15.gif" width="2" height="9" alt="" /></td>
		<td rowspan="3">
			<img src="images_register/register_16.gif" width="25" height="139" alt="" /></td>
		<td rowspan="3">
			<img src="images_register/register_17.gif" width="28" height="139" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="9" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<a href="login.php"><img src="images_register/register_18.gif" name="btn4" width="115" height="104" border="0" onMouseOver="btn4.src='images_register/register1_18.gif'" onMouseOut="btn4.src='images_register/register_18.gif'" /></a></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="104" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="register.php"><img src="images_register/register1_19.gif" width="115" height="106" border="0" /></a></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="26" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_register/register_20.gif" width="25" height="122" alt="" /></td>
		<td rowspan="2">
			<img src="images_register/register_21.gif" width="28" height="122" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="80" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="contact.html"><img src="images_register/register_22.gif" name="btn5" width="115" height="96" border="0" id="btn5" onMouseOver="btn5.src='images_register/register1_22.gif'" onMouseOut="btn5.src='images_register/register_22.gif'" /></a></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="42" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images_register/register_23.gif" width="25" height="86" alt="" /></td>
		<td rowspan="2">
			<img src="images_register/register_24.gif" width="28" height="86" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="54" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="2">
			<a href="toppers.php"><img src="images_register/register_25.gif" alt="" width="113" height="105" border="0" /></a></td>
		<td colspan="2">
			<img src="images_register/register_26.gif" width="2" height="32" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="32" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_register/register_27.gif" width="27" height="124" alt="" /></td>
		<td rowspan="2">
			<img src="images_register/register_28.gif" width="28" height="124" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="73" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images_register/register_29.gif" width="113" height="115" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="51" alt="" /></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images_register/register_30.gif" width="27" height="47" alt="" /></td>
		<td rowspan="2">
			<img src="images_register/register_31.gif" width="28" height="47" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="35" alt="" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images_register/register_32.gif" width="209" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_register/register_33.gif" width="116" height="12" alt="" /></td>
		<td>
			<img src="images_register/register_34.gif" width="27" height="12" alt="" /></td>
		<td colspan="2">
			<img src="images_register/register_35.gif" width="126" height="12" alt="" /></td>
		<td colspan="3">
			<img src="images_register/register_36.gif" width="254" height="12" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="12" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_register/register_37.gif" width="1" height="17" alt="" /></td>
		<td colspan="13">
			<img src="images_register/register_38.gif" width="786" height="17" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="17" alt="" /></td>
	</tr>
	<tr>
		<td>
			<img src="images_register/spacer.gif" width="113" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="25" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="131" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="78" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="81" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="35" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="27" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="87" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="39" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="108" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="130" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="16" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="28" height="1" alt="" /></td>
		<td>
			<img src="images_register/spacer.gif" width="124" height="1" alt="" /></td>
		<td></td>
	</tr>
</table>
</body>
</html>