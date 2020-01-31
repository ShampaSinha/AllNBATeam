
<?php
session_start();

include 'connection.php';

  $sql="select* from signup";
  $result = mysqli_query($con, $sql);
echo 'ID'.' '.'Name'.' '.'User'.' '.'Pass'.'<br>'; 
if(isset($_POST['but']))
{
	
   if(isset($_POST['but']))
  {


		if (mysqli_num_rows($result) > 0) 
		{
    		// output data of each row
    		echo "<table border='2'>";
    		while($row = mysqli_fetch_assoc($result)) 
    		{
        		echo "<tr>"."<td>"."username: " . $row["username"]. " - Mobile: " . $row["mobile"]."</tr>";
       		}
       		echo "</table>";
		}
		else 
			{
    			echo "0 results";
			}
	}
}
?>
<form action="#" method="POST">
<body>
	<input type="submit" name="but">
</body> 
</form>
