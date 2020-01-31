

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="text/css" href="icon.png">
    <title>Sports Arena</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.bookname{
		font-size: 18px;
	}
	.bookprice{
		font-size: 20px;
	}input[type=text], input[type=password] 
	{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	}

	.bu 
	{
    	background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 5%;
	    height: 3%;
	}

	.bu:hover 
	{
    	opacity: 0.8;
	}
	.ftr{
			background-color: black;
			padding: 60px 0px 30px 0px;
			margin-top: 20px;
		}
		.ftr address,.ftr a,.ftr p{
			color:#fff;
		}
		.padded{
			padding-right: 30px;padding-left: 30px;
		}
</style>
<script type="text/javascript">
   function sign()
    {
        window.location.assign("./signup.html");
    }
</script>
</head>
<body >


	 <div> <nav class="navbar navbar-expand-lg navbar-dark black navbar-right">
    <a class="navbar-brand" href="#">
             <img src="newlogo.jpg" alt="logo" style="width: 40px;">
              </a>
    <a class="navbar-brand" href="#">Sports Arena</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav mr-auto">        
             <li class="nav-item active">
                <a class="nav-link" href="home.html"><b>Home</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="basketball.html"><b>Basketball</b></a>
            </li>
            <li class="nav-item " >
                <a class="nav-link" href="players_basketball.html"><b>players info</b></a>
            </li>
            
        </ul>
    </div>
</nav>   
</div>


	<div>
		<form method="post" action='player_detail.php'>
			<div class="container well" style="width: 30%;">
				<center><legend> User Login </legend></center>
    			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Email</b></label><br>
    			<center><input type="text" placeholder="Enter Email" name="uname" id="uname" required=""><br></center>

    			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><b>Password</b></label><br>
    			<center><input type="password" placeholder="Enter Password" name="psw" id="psw" required=""><br></center>
        
    			<center><button class="bu" style="width: 20%" type="submit" name="submit">Login</button>&nbsp<a href="signup.php"><button class="bu" style="width: 20%;" onClick="window.location.href='signup.php';">Signup</button></a></center><br>
    			<input type="checkbox" checked="checked"> Remember me 

          <span style="float: right;"><b>Login</b><span>
            <a href="adm_login.html">Admin Login</a></span><br>
  			</div>
		</form>
	</div>
</div>

<div>
	<br>
	<br>
	<br>
</div>

<div
<!-- Footer -->
<footer class="page-footer font-small black pt-4 fixed-bottom" >

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5>Sports Arena</h5>
          <p></p>
          <p></p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-6">

            <!-- Links -->
            

            <ul class="list-unstyled">
              <li>
                <a href="home.html"><b>Home</b></a>
              </li>
              <li>
                <a href="contact.html"><b>Contact Us</b></a>
              </li>
              <li>
                <a href="about.html"><b>About Us</b></a>
              </li>
              
            </ul>

          </div>
          <!-- Grid column -->

         

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">� 2019 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Sports Arena</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</div> 
 

</div>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>



<?php
session_start();

include 'connection.php';
if(isset($_POST['submit']))
{
  
   if(isset($_POST['submit']))
  {
  $getuser=$_POST['uname'];
  $getpass=$_POST['psw'];
  $sql="select* from loginp where Username='$getuser' and Password='$getpass'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  $rowsts=mysqli_fetch_array($result);
  if($result==true)
  {
    $tree=1;
  }
  else
  {
  
    $tree=0;
  }
}
}

?>