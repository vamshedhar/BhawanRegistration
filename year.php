<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Year-Wise List</title>
</head>

<body>
	
<div align="center">
<form action="year.php" method="post">
<select name="year">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Fourth</option>
<option value="5">Fifth</option>
</select>
<input type="submit" name="submit" />
</form>
</div>
<?php 

if(isset($_POST['submit']))

{
?>
<table align="center" border="1" cellpadding="2" cellspacing="0">
<tr><td colspan="14"><h3 align="center">List of <?php echo $_POST['year']; ?> Year Students</h3></td></tr>
<tr>
<td>Sno.</td><td>Enrollment No</td><td>Name</td><td>Gender</td><td>Bhawan</td><td>Room No</td><td>Programme</td><td>Year</td><td>Mobile No.</td><td>Date Of Birth</td><td>Father's Name</td><td>Home Address</td><td>Home Phone</td><td>Blood Group</td>
</tr>

<?php
include('dbconnect.php');
$result = mysql_query("SELECT * FROM signupug WHERE year='$_POST[year]' AND programme!='M.Tech' ORDER BY userKey DESC");
$a = 1;

while($resarray = mysql_fetch_array($result))
{
?>



<tr>
<td><?php echo $a;?></td><td><?php echo $resarray['userKey'];?></td><td><?php echo $resarray['fname']." ".$resarray['lname'];?></td><td><?php echo $resarray['gender'];?></td><td><?php echo $resarray['bhawan'];?></td><td><?php echo $resarray['roomNo'];?></td><td><?php echo $resarray['programme'];?></td><td><?php echo $resarray['year'];?></td><td><?php echo $resarray['mobileNo'];?></td><td><?php echo $resarray['dob'];?></td><td><?php echo $resarray['fatherName'];?></td><td><?php echo $resarray['homeAddress']."<br>".$resarray['city']."<br>".$resarray['state']."<br>".$resarray['zipCode'];?></td><td><?php echo $resarray['homePhone'];?></td><td><?php echo $resarray['bloodGroup'];?></td>
</tr>

<?php $a++;}



}?>





</table>

</body>
</html>