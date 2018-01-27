<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registered</title>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>

</head>

<body>	

<?php 
include('dbconnect.php');




if(isset($_POST['submit']))
{
	 $enum = $_POST['userKey']/1;
	
$query = mysql_query("INSERT INTO signupug SET fname='$_POST[fname]', lname='$_POST[lname]', gender='$_POST[gender]', dob='$_POST[dob]', programme='$_POST[programme]', year='$_POST[year]', userKey='$_POST[userKey]', mobileNo='$_POST[mobileNo]', bhawan='$_POST[bhawan]', roomNo='$_POST[roomNo]', homePhone='$_POST[homePhone]', homeAddress='$_POST[homeAddress]', city='$_POST[city]', zipCode='$_POST[zipCode]', state='$_POST[state]', fatherName='$_POST[fatherName]', bloodGroup='$_POST[bloodGroup]'");
if(!$query){ echo mysql_error();}
if(mysql_error() == "Duplicate entry '$enum' for key 'PRIMARY'")
{
?>


<h4 align="center">You were already registered with the following details!!</h4>
<table align="center" border="1" cellpadding="2" cellspacing="0">

<tr>
<td>Sno.</td><td>Enrollment No</td><td>Name</td><td>Gender</td><td>Bhawan</td><td>Room No</td><td>Programme</td><td>Year</td><td>Mobile No.</td><td>Date Of Birth</td><td>Father's Name</td><td>Home Address</td><td>Home Phone</td><td>Blood Group</td>
</tr>

<?php

$result1 = mysql_query("SELECT * FROM signupug WHERE userKey='$_POST[userKey]'");
$s1 = 1;

while($resarray1 = mysql_fetch_array($result1))
{
?>



<tr>
<td><?php echo $s1;?></td><td><?php echo $resarray1['userKey'];?></td><td><?php echo $resarray1['fname']." ".$resarray1['lname'];?></td><td><?php echo $resarray1['gender'];?></td><td><?php echo $resarray1['bhawan'];?></td><td><?php echo $resarray1['roomNo'];?></td><td><?php echo $resarray1['programme'];?></td><td><?php echo $resarray1['year'];?></td><td><?php echo $resarray1['mobileNo'];?></td><td><?php echo $resarray1['dob'];?></td><td><?php echo $resarray1['fatherName'];?></td><td><?php echo $resarray1['homeAddress']."<br>".$resarray1['city']."<br>".$resarray1['state']."<br>".$resarray1['zipCode'];?></td><td><?php echo $resarray1['homePhone'];?></td><td><?php echo $resarray1['bloodGroup'];?></td>
</tr>

<?php $s++;}?>	
</table>

		
	
	
	<?php }
else{ echo "<h4>Your Details were Sucessuully Entered!!!Thank You!!!</h4>";}

?>
<h4 align="center"><a href="index.php">Click Here</a> For another registration</h4>
<br /><br />


<table align="center" border="1" cellpadding="2" cellspacing="0">
<tr><td colspan="14"><h3 align="center">Total list of Registered Students</h3></td></tr>
<tr>
<td>Sno.</td><td>Enrollment No</td><td>Name</td><td>Gender</td><td>Bhawan</td><td>Room No</td><td>Programme</td><td>Year</td><td>Mobile No.</td><td>Date Of Birth</td><td>Father's Name</td><td>Home Address</td><td>Home Phone</td><td>Blood Group</td>
</tr>

<?php

$result = mysql_query("SELECT * FROM signupug  ORDER BY userKey DESC");
$s = 1;

while($resarray = mysql_fetch_array($result))
{
?>



<tr>
<td><?php echo $s;?></td><td><?php echo $resarray['userKey'];?></td><td><?php echo $resarray['fname']." ".$resarray['lname'];?></td><td><?php echo $resarray['gender'];?></td><td><?php echo $resarray['bhawan'];?></td><td><?php echo $resarray['roomNo'];?></td><td><?php echo $resarray['programme'];?></td><td><?php echo $resarray['year'];?></td><td><?php echo $resarray['mobileNo'];?></td><td><?php echo $resarray['dob'];?></td><td><?php echo $resarray['fatherName'];?></td><td><?php echo $resarray['homeAddress']."<br>".$resarray['city']."<br>".$resarray['state']."<br>".$resarray['zipCode'];?></td><td><?php echo $resarray['homePhone'];?></td><td><?php echo $resarray['bloodGroup'];?></td>
</tr>
<?php $s++;}



?>





</table>

<?php }?>

<?php 

if(isset($_POST['update']))
{

$update = mysql_query("SELECT * FROM signupug WHERE userKey='$_POST[enum]'");
$updatearray = mysql_fetch_array($update);
if($updatearray['userKey'] == NULL)
{ echo "<h4 align=\"center\">No details were Registered with Enrollment No. ".$_POST['enum']."</h4>";
?>

<h4 align="center"><a href="index.php">Click Here</a> For Home page</h4>
<br /><br />

<?php }
else{
?>
<br /><br />
<table width="670" border="0" cellspacing="0" cellpadding="0" align="center">

<form action="registered.php" method="post" enctype="multipart/form-data">

   
 
    <tr>
      <td>First Name </td>
      <td><label>
        <input name="fname" type="text" id="fname" maxlength="30" value="<?php echo $updatearray['fname']?>"/>
        </label></td>
      <td class="italic">please capitalize only the first letter of your name</td>
    </tr>
    <tr>
      <td>Last Name </td>
      <td><input name="lname" type="text" id="lname" maxlength="30" value="<?php echo $updatearray['lname']?>"/></td>
      <td class="italic">include your middle name here </td>
       
    <tr>
      <td>Gender</td>
      <td><label>
        <input name="gender" type="radio" value="Male" <?php if($updatearray['gender'] == "Male"){echo("checked=\"checked\"");} ?> />
        Male</label>
        <label>
        <input name="gender" type="radio" value="Female" <?php if($updatearray['gender'] == "Female"){echo("checked=\"checked\"");} ?> />
      Female</label></td>
      <td></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><input name="dob" type="text" id="dob" value="<?php echo $updatearray['dob']?>"  maxlength="10" /></td>
      <td class="italic">please use the given format (YYYY-MM-DD) only</td>
    </tr>
    <tr>
      <td>Blood Group</td>
      <td><select name="bloodGroup" id="bloodGroup">
      	<option value="" <?php if($updatearray['bloodGroup'] == ""){echo("selected=\"selected\"");} ?>></option>
        <option value="A+"  <?php if($updatearray['bloodGroup'] == "A+"){echo("selected=\"selected\"");} ?> >A+</option>
        <option value="B+" <?php if($updatearray['bloodGroup'] == "B+"){echo("selected=\"selected\"");} ?>>B+</option>
        <option value="O+" <?php if($updatearray['bloodGroup'] == "O+"){echo("selected=\"selected\"");} ?>>O+</option>
        <option value="AB+" <?php if($updatearray['bloodGroup'] == "AB+"){echo("selected=\"selected\"");} ?>>AB+</option>
        <option value="A-" <?php if($updatearray['bloodGroup'] == "A-"){echo("selected=\"selected\"");} ?>>A-</option>
        <option value="B-" <?php if($updatearray['bloodGroup'] == "B-"){echo("selected=\"selected\"");} ?>>B-</option>
        <option value="O-" <?php if($updatearray['bloodGroup'] == "O-"){echo("selected=\"selected\"");} ?>>O-</option>
        <option value="AB-" <?php if($updatearray['bloodGroup'] == "AB-"){echo("selected=\"selected\"");} ?>>AB-</option>
      </select>      </td>
      <td class="italic">&nbsp;</td>
    </tr>
    <tr>
      <td>Programme</td>
      <td><label>
        <select name="programme" id="programme">
          <option value="Polymer Science and Technology" <?php if($updatearray['programme'] == "Polymer Science and Technology"){echo("selected=\"selected\"");} ?>>Polymer Science &amp; Technology</option>
          <option value="Process Engineering with MBA" <?php if($updatearray['programme'] == "Process Engineering with MBA"){echo("selected=\"selected\"");} ?>>Process Engineering with MBA</option>
          <option value="Pulp and Paper Engineering" <?php if($updatearray['programme'] == "Pulp and Paper Engineering"){echo("selected=\"selected\"");} ?>>Pulp and Paper Engineering</option>
          <option value="Research Scholar" <?php if($updatearray['programme'] == "Research Scholar"){echo("selected=\"selected\"");} ?>>Research Scholar</option>
          <option value="M.Tech" <?php if($updatearray['programme'] == "M.Tech"){echo("selected=\"selected\"");} ?>>M.Tech</option>
          <option value="Merit Hostel" <?php if($updatearray['programme'] == "Merit Hostel"){echo("selected=\"selected\"");} ?>>Merit Hostel</option>
        </select>
        </label></td>
      <td></td>
    </tr>
    <tr>
      <td>Year</td>
      <td><label>
        <select name="year" id="year">
        	<option value="" <?php if($updatearray['year'] == ""){echo("selected=\"selected\"");} ?>></option>
          <option value="1" <?php if($updatearray['year'] == "1"){echo("selected=\"selected\"");} ?>>First</option>
          <option value="2" <?php if($updatearray['year'] == "2"){echo("selected=\"selected\"");} ?>>Second</option>
          <option value="3" <?php if($updatearray['year'] == "3"){echo("selected=\"selected\"");} ?>>Third</option>
          <option value="4" <?php if($updatearray['year'] == "4"){echo("selected=\"selected\"");} ?>>Fourth</option>
          <option value="5" <?php if($updatearray['year'] == "5"){echo("selected=\"selected\"");} ?>>Fifth</option>
        </select>
        </label>
	</td>
      <td></td>
    </tr>
    <tr>
      <td>Enrollment No.* </td>
      <td><input name="userKey" type="text" id="userKey" value="<?php echo $updatearray['userKey']?>" maxlength="10" /></td>
      <td><input type="hidden" name="hiddenenum" value="<?php echo $updatearray['userKey']?>" /></td>
    </tr>
    <tr>
      <td>Mobile No. </td>
      <td><input name="mobileNo" type="text" id="mobileNo" maxlength="10" value="<?php echo $updatearray['mobileNo']?>" /></td>
      <td class="italic">do not include any + or 91 </td>
    </tr>
    <tr>
      <td>Room No.* </td>
      <td><label>Bhawan
        <select name="bhawan" id="bhawan">
          <option value="Malviya A" <?php if($updatearray['bhawan'] == "Malviya A"){echo("selected=\"selected\"");} ?>>Malviya A</option>
          <option value="Malviya B" <?php if($updatearray['bhawan'] == "Malviya B"){echo("selected=\"selected\"");} ?>>Malviya B</option>
          <option value="Indira A" <?php if($updatearray['bhawan'] == "Indira A"){echo("selected=\"selected\"");} ?>>Indira A</option>
          <option value="Indira B" <?php if($updatearray['bhawan'] == "Indira B"){echo("selected=\"selected\"");} ?>>Indira B</option>
        </select>
        </label>
        <label> Room
        <input name="roomNo" type="text" id="roomNo" value="<?php echo $updatearray['roomNo']?>" size="3" maxlength="3" />
        </label></td>
      <td class="italic">please enter room no. as 128</td>
    </tr>
    
    <tr>
      <td>Father's Name</td>
      <td><input name="fatherName" type="text" id="fatherName" value="<?php echo $updatearray['fatherName']?>" maxlength="50" /></td>
      <td class="italic">&nbsp;</td>
    </tr>
    
    <tr>
      <td>Home Phone </td>
      <td><input name="homePhone" type="text" id="homePhone" value="<?php echo $updatearray['homePhone']?>" maxlength="15" /></td>
      <td class="italic">include all codes necessary, leave out + </td>
    </tr>
    <tr>
      <td>Home Address* </td>
      <td><label>
        <textarea name="homeAddress" rows="3" id="homeAddress"><?php echo $updatearray['homeAddress']?></textarea>
        </label></td>
      <td></td>
    </tr>
    <tr>
      <td>City</td>
      <td>
        <input name="city" type="text" id="city" value="<?php echo $updatearray['city']?>" maxlength="30" />      </td>
      <td></td>
    </tr>
    <tr>
      <td>PIN Code </td>
      <td>
        <input name="zipCode" type="text" id="zipCode" value="<?php echo $updatearray['zipCode']?>" maxlength="7" />      </td>
      <td></td>
    </tr>
    <tr>
      <td>State</td>
      <td>
<select name="state" id="state">
<option value="Assam" <?php if($updatearray['state'] == "Assam"){echo("selected=\"selected\"");} ?>>Assam</option>
<option value="Andhra Pradesh" <?php if($updatearray['state'] == "Andhra Pradesh"){echo("selected=\"selected\"");} ?>>Andhra Pradesh</option>
<option value="Arunachal Pradesh" <?php if($updatearray['state'] == "Arunachal Pradesh"){echo("selected=\"selected\"");} ?>>Arunachal Pradesh</option>
<option value="Bihar" <?php if($updatearray['state'] == "Bihar"){echo("selected=\"selected\"");} ?>>Bihar</option>
<option value="Chattisgarh" <?php if($updatearray['state'] == "Chattisgarh"){echo("selected=\"selected\"");} ?>>Chattisgarh</option>
<option value="Goa" <?php if($updatearray['state'] == "Goa"){echo("selected=\"selected\"");} ?>>Goa</option>
<option value="Gujarat" <?php if($updatearray['state'] == "Gujarat"){echo("selected=\"selected\"");} ?>>Gujarat</option>
<option value="Haryana" <?php if($updatearray['state'] == "Haryana"){echo("selected=\"selected\"");} ?>>Haryana</option>
<option value="Himachal Pradesh" <?php if($updatearray['state'] == "Himachal Pradesh"){echo("selected=\"selected\"");} ?>>Himachal Pradesh</option>
<option value="Jammu and Kashmir" <?php if($updatearray['state'] == "Jammu and Kashmir"){echo("selected=\"selected\"");} ?>>Jammu and Kashmir</option>
<option value="Jharkhand" <?php if($updatearray['state'] == "Jharkhand"){echo("selected=\"selected\"");} ?>>Jharkhand</option>
<option value="Karnataka" <?php if($updatearray['state'] == "Karnataka"){echo("selected=\"selected\"");} ?>>Karnataka</option>
<option value="Kerala" <?php if($updatearray['state'] == "Kerala"){echo("selected=\"selected\"");} ?>>Kerala</option>
<option value="Madhya Pradesh" <?php if($updatearray['state'] == "Madhya Pradesh"){echo("selected=\"selected\"");} ?>>Madhya Pradesh</option>
<option value="Maharashtra" <?php if($updatearray['state'] == "Maharashtra"){echo("selected=\"selected\"");} ?>>Maharashtra</option>
<option value="Manipur" <?php if($updatearray['state'] == "Manipur"){echo("selected=\"selected\"");} ?>>Manipur</option>
<option value="Meghalaya" <?php if($updatearray['state'] == "Meghalaya"){echo("selected=\"selected\"");} ?>>Meghalaya</option>
<option value="Mizoram" <?php if($updatearray['state'] == "Mizoram"){echo("selected=\"selected\"");} ?>>Mizoram</option>
<option value="Nagaland" <?php if($updatearray['state'] == "Nagaland"){echo("selected=\"selected\"");} ?>>Nagaland</option>
<option value="Orissa" <?php if($updatearray['state'] == "Orissa"){echo("selected=\"selected\"");} ?>>Orissa</option>
<option value="Punjab" <?php if($updatearray['state'] == "Punjab"){echo("selected=\"selected\"");} ?>>Punjab</option>
<option value="Rajasthan" <?php if($updatearray['state'] == "Rajasthan"){echo("selected=\"selected\"");} ?>>Rajasthan</option>
<option value="Sikkim" <?php if($updatearray['state'] == "Sikkim"){echo("selected=\"selected\"");} ?>>Sikkim</option>
<option value="Tamil Nadu" <?php if($updatearray['state'] == "Tamil Nadu"){echo("selected=\"selected\"");} ?>>Tamil Nadu</option>
<option value="Tripura" <?php if($updatearray['state'] == "Tripura"){echo("selected=\"selected\"");} ?>>Tripura</option>
<option value="Uttaranchal" <?php if($updatearray['state'] == "Uttaranchal"){echo("selected=\"selected\"");} ?>>Uttaranchal</option>
<option value="Uttar Pradesh" <?php if($updatearray['state'] == "Uttar Pradesh"){echo("selected=\"selected\"");} ?>>Uttar Pradesh</option>
<option value="West Bengal" <?php if($updatearray['state'] == "West Bengal"){echo("selected=\"selected\"");} ?>>West Bengal</option>
<option value="Andaman and Nicobar Islands" <?php if($updatearray['state'] == "Andaman and Nicobar Islands"){echo("selected=\"selected\"");} ?>>Andaman and Nicobar Islands</option>
<option value="Chandigarh" <?php if($updatearray['state'] == "Chandigarh"){echo("selected=\"selected\"");} ?>>Chandigarh</option>
<option value="Dadar and Nagar Haveli" <?php if($updatearray['state'] == "Dadar and Nagar Haveli"){echo("selected=\"selected\"");} ?>>Dadar and Nagar Haveli</option>
<option value="Daman and Diu" <?php if($updatearray['state'] == "Daman and Diu"){echo("selected=\"selected\"");} ?>>Daman and Diu</option>
<option value="Delhi" <?php if($updatearray['state'] == "Delhi"){echo("selected=\"selected\"");} ?>>Delhi </option>
<option value="Lakshadweep" <?php if($updatearray['state'] == "Lakshadweep"){echo("selected=\"selected\"");} ?>>Lakshadweep</option>
<option value="Pondicherry" <?php if($updatearray['state'] == "Pondicherry"){echo("selected=\"selected\"");} ?>>Pondicherry</option>
</select>
</td>
      <td class="italic"></td>
    </tr>
   
    <tr>
      <td></td>
      <td><input name="updatedetails" type="submit" id="submit" onclick="MM_validateForm('fname','','R','lname','','R','dob','','R','userKey','','RisNum','mobileNo','','NisNum','roomNo','','RisNum','fatherName','','R','homePhone','','NisNum','city','','R','zipCode','','RisNum','homeAddress','','R');return document.MM_returnValue"  value="Update" />
      <input name="delete" type="submit" value="Delete" /></td>
      <td></td>
    </tr>
 

</table>
</form>
<?php }}

if(isset($_POST['updatedetails']))

{





$update1 = mysql_query("UPDATE signupug SET fname='$_POST[fname]', lname='$_POST[lname]', gender='$_POST[gender]', dob='$_POST[dob]', programme='$_POST[programme]', year='$_POST[year]', userKey='$_POST[userKey]', mobileNo='$_POST[mobileNo]', bhawan='$_POST[bhawan]', roomNo='$_POST[roomNo]', homePhone='$_POST[homePhone]', homeAddress='$_POST[homeAddress]', city='$_POST[city]', zipCode='$_POST[zipCode]', state='$_POST[state]', fatherName='$_POST[fatherName]', bloodGroup='$_POST[bloodGroup]'  WHERE userKey='$_POST[hiddenenum]'");
if($update1){ echo "<h4 align=\"center\">Your Details were Sucessuully Updated!!!Thank You!!!</h4>";}
else{ echo mysql_error();}

?>
	<h4 align="center"><a href="index.php">Click Here</a> For another registration</h4>
<br /><br />
    
<table align="center" border="1" cellpadding="2" cellspacing="0">
<tr><td colspan="14"><h3 align="center">Total list of Registered Students</h3></td></tr>
<tr>
<td>Sno.</td><td>Enrollment No</td><td>Name</td><td>Gender</td><td>Bhawan</td><td>Room No</td><td>Programme</td><td>Year</td><td>Mobile No.</td><td>Date Of Birth</td><td>Father's Name</td><td>Home Address</td><td>Home Phone</td><td>Blood Group</td>
</tr>

<?php

$result = mysql_query("SELECT * FROM signupug  ORDER BY userKey DESC");
$a = 1;

while($resarray = mysql_fetch_array($result))
{
?>



<tr>
<td><?php echo $a;?></td><td><?php echo $resarray['userKey'];?></td><td><?php echo $resarray['fname']." ".$resarray['lname'];?></td><td><?php echo $resarray['gender'];?></td><td><?php echo $resarray['bhawan'];?></td><td><?php echo $resarray['roomNo'];?></td><td><?php echo $resarray['programme'];?></td><td><?php echo $resarray['year'];?></td><td><?php echo $resarray['mobileNo'];?></td><td><?php echo $resarray['dob'];?></td><td><?php echo $resarray['fatherName'];?></td><td><?php echo $resarray['homeAddress']."<br>".$resarray['city']."<br>".$resarray['state']."<br>".$resarray['zipCode'];?></td><td><?php echo $resarray['homePhone'];?></td><td><?php echo $resarray['bloodGroup'];?></td>
</tr>

<?php $a++;}



?>
</table>
<?php }?>
<?php

if(isset($_POST['delete']))
{
	$delete = mysql_query("DELETE FROM signupug WHERE userKey='$_POST[hiddenenum]'");
	if(!$delete){ echo mysql_error();}
	else { echo "<h4 align=\"center\">Entry was Sucessfully deleted!!!</h4>";}
	
?>

<h4 align="center"><a href="index.php">Click Here</a> For another registration</h4>
<br /><br />

	
<table align="center" border="1" cellpadding="2" cellspacing="0">
<tr><td colspan="14"><h3 align="center">Total list of Registered Students</h3></td></tr>
<tr>
<td>Sno.</td><td>Enrollment No</td><td>Name</td><td>Gender</td><td>Bhawan</td><td>Room No</td><td>Programme</td><td>Year</td><td>Mobile No.</td><td>Date Of Birth</td><td>Father's Name</td><td>Home Address</td><td>Home Phone</td><td>Blood Group</td>
</tr>

<?php

$result = mysql_query("SELECT * FROM signupug  ORDER BY userKey DESC");
$a = 1;

while($resarray = mysql_fetch_array($result))
{
?>



<tr>
<td><?php echo $a;?></td><td><?php echo $resarray['userKey'];?></td><td><?php echo $resarray['fname']." ".$resarray['lname'];?></td><td><?php echo $resarray['gender'];?></td><td><?php echo $resarray['bhawan'];?></td><td><?php echo $resarray['roomNo'];?></td><td><?php echo $resarray['programme'];?></td><td><?php echo $resarray['year'];?></td><td><?php echo $resarray['mobileNo'];?></td><td><?php echo $resarray['dob'];?></td><td><?php echo $resarray['fatherName'];?></td><td><?php echo $resarray['homeAddress']."<br>".$resarray['city']."<br>".$resarray['state']."<br>".$resarray['zipCode'];?></td><td><?php echo $resarray['homePhone'];?></td><td><?php echo $resarray['bloodGroup'];?></td>
</tr>

<?php $a++;}



?>
</table>



<?php }?>












</body>
</html>