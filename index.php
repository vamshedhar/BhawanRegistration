<head>
<link type="text/css" rel="stylesheet" href="style_.css" /><link type="image/jpg" rel="shortcut icon" href="images/favicon.ico" />
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
<form action="registered.php" method="post" enctype="multipart/form-data">
<table align="center" border="0" cellspacing="0" cellpadding="0" >
<tr><td>
<table width="670" border="0" cellspacing="0" cellpadding="0" align="center">


   
 
    <tr>
      <td>First Name </td>
      <td><label>
        <input name="fname" type="text" id="fname" maxlength="30"/>
        </label></td>
      <td class="italic">please capitalize only the first letter of your name</td>
    </tr>
    <tr>
      <td>Last Name </td>
      <td><input name="lname" type="text" id="lname" maxlength="30" /></td>
      <td class="italic">include your middle name here </td>
       
    <tr>
      <td>Gender</td>
      <td><label>
        <input name="gender" type="radio" value="Male"/>
        Male</label>
        <label>
        <input name="gender" type="radio" value="Female" />
        Female</label></td>
      <td></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><input name="dob" type="text" id="dob" value="YYYY-MM-DD" maxlength="10" /></td>
      <td class="italic">please use the given format (YYYY-MM-DD) only</td>
    </tr>
    <tr>
      <td>Blood Group</td>
      <td><select name="bloodGroup" id="bloodGroup">
      	<option value="" selected="selsected"></option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="O-">O-</option>
        <option value="AB-">AB-</option>
      </select>      </td>
      <td class="italic">&nbsp;</td>
    </tr>
    <tr>
      <td>Programme</td>
      <td><label>
        <select name="programme" id="programme">
          <option value="Polymer Science and Technology">Polymer Science &amp; Technology</option>
          <option value="Process Engineering with MBA">Process Engineering with MBA</option>
          <option value="Pulp and Paper Engineering">Pulp and Paper Engineering</option>
          <option value="Research Scholar">Research Scholar</option>
          <option value="M.Tech">M.Tech</option>
          <option value="Merit Hostel">Merit Hostel</option>
        </select>
        </label></td>
      <td></td>
    </tr>
    <tr>
      <td>Year</td>
      <td><label>
        <select name="year" id="year">
          <option value="" selected="selected"></option>
          <option value="1" >First</option>
          <option value="2">Second</option>
          <option value="3">Third</option>
          <option value="4">Fourth</option>
          <option value="5">Fifth</option>
        </select>
        </label>
	</td>
      <td></td>
    </tr>
    <tr>
      <td>Enrollment No.* </td>
      <td><input name="userKey" type="text" id="userKey" maxlength="10" /></td>
      <td></td>
    </tr>
    <tr>
      <td>Mobile No. </td>
      <td><input name="mobileNo" type="text" id="mobileNo" maxlength="10" /></td>
      <td class="italic">do not include any + or 91 </td>
    </tr>
    <tr>
      <td>Room No.* </td>
      <td><label>Bhawan
        <select name="bhawan" id="bhawan">
          <option value="Malviya A">Malviya A</option>
          <option value="Malviya B">Malviya B</option>
          <option value="Indira A">Indira A</option>
          <option value="Indira B">Indira B</option>
        </select>
        </label>
        <label> Room
        <input name="roomNo" type="text" id="roomNo" size="3" maxlength="3" />
        </label></td>
      <td class="italic">please enter room no. as 128</td>
    </tr>
    
    <tr>
      <td>Father's Name</td>
      <td><input name="fatherName" type="text" id="fatherName" maxlength="50" /></td>
      <td class="italic">&nbsp;</td>
    </tr>
    
    <tr>
      <td>Home Phone </td>
      <td><input name="homePhone" type="text" id="homePhone" maxlength="15" /></td>
      <td class="italic">include all codes necessary, leave out + </td>
    </tr>
    <tr>
      <td>Home Address* </td>
      <td><label>
        <textarea name="homeAddress" rows="3" id="homeAddress"></textarea>
        </label></td>
      <td></td>
    </tr>
    <tr>
      <td>City</td>
      <td>
        <input name="city" type="text" id="city" maxlength="30" />      </td>
      <td></td>
    </tr>
    <tr>
      <td>PIN Code </td>
      <td>
        <input name="zipCode" type="text" id="zipCode" maxlength="7" />      </td>
      <td></td>
    </tr>
    <tr>
      <td>State</td>
      <td>
<select name="state" id="state">
<option value="Assam">Assam</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Bihar">Bihar</option>
<option value="Chattisgarh">Chattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi ">Delhi </option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Pondicherry">Pondicherry</option>
</select>
</td>
      <td class="italic"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><input name="hidden" type="hidden" id="hidden" value="ug" /></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td><input name="submit" type="submit" id="submit" onClick="MM_validateForm('fname','','R','lname','','R','dob','','R','userKey','','RisNum','mobileNo','','NisNum','roomNo','','RisNum','fatherName','','R','city','','R','zipCode','','RisNum','homeAddress','','R');return document.MM_returnValue" value="Submit" />
      <input name="clear" type="reset" id="clear" value="Clear" /></td>
      <td></td>
    </tr>
 

</table>
<br /><br />
<table align="center">
<tr><td>Enter Your Enrollment No.</td><td><input name="enum" type="text" id="enum" /></td></tr>
<tr>
  <td colspan="2" align="center"><input name="update" type="submit" onClick="MM_validateForm('enum','','RisNum');return document.MM_returnValue" /> </td></tr>
</table>
</td><td width="15"></td><td style="vertical-align:top" width="250px">
<br /><br />
<h4 align="center" ><a href="list.php" target="_new">Click Here</a> for Total List of registered students</h4>
<br /><br />
<br /><br />
<h4 align="center" ><a href="branch.php" target="_new">Click Here</a> for Branch-Wise List of students</h4>
<br /><br />
<br /><br />
<h4 align="center" ><a href="year.php" target="_new">Click Here</a> for Year-Wise List of students</h4>
<br /><br />
<br /><br />
<h4 align="center" ><a href="double.php" target="_new">Click Here</a> for Branch and Year-wise List of students</h4>
<br /><br />
</td></tr></table>



 </form>
</body>