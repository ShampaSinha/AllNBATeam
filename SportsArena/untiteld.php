
	$count=mysqli_num_rows($result);
	$rowsts=mysqli_fetch_array($result);
	$getstatus=$rowsts['status'];
	
	if($getstatus==true)
	{
		echo "Success";
	}
	else
	{
	
		echo "Invalid Username or Password";
	}


	<select style="padding: 10px 20px;" name="e9" id="n9" required="">
        <option>India</option>
        <option>USA</option>
        <option>South Africa</option>
        <option>Australia</option>
    </select>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Identity</b></label>&nbsp&nbsp
    <select style="padding: 10px 20px;" name="e10" id="n10" required="">
        <option>Passport</option>
        <option>Addhar Card</option>
        <option>Driving Licence</option>
        <option>Voter ID Card</option>
    </select><br>