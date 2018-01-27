<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	
<table align="center" border="1" width="90%" cellpadding="10" cellspacing="0">

<tr>
<td>Sno.</td><td>Name</td><td>Programme</td><td>Year</td></tr>

<?php
include('dbconnect.php');
$result = mysql_query("SELECT * FROM studentsug ORDER BY userKey DESC");
$a = 1;

while($resarray = mysql_fetch_array($result))
{
?>

<td><?php echo $a;?></td><td><?php echo $resarray['fname']." ".$resarray['lname'];?></td><td><?php echo $resarray['programme'];?></td><td><?php echo $resarray['year'];?></td></tr>


<?php $a++;}



?>





</table>

</body>
</html>