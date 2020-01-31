
<?php
session_start();

include 'connection.php';
if(isset($_POST['submit']))
{
    $getfn=$_POST['e1'];
    $getln=$_POST['e2'];
    $getuser=$_POST['e3'];
    $getmn=$_POST['e4'];
    $getemail=$_POST['e5'];
    $getpass=$_POST['e6'];
    $getrpass=$_POST['e7'];
    $getadd=$_POST['e8'];
    if($getpass==$getrpass)
    {
	$sql="select * from loginp where Username='$getuser'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
         echo "Already Exists";
    }
    else
    {    
        $sql1="INSERT INTO loginp (Id,Username,Password) values('','$getuser','$getpass')";
        $result1=mysqli_query($con,$sql1);
        $sql2="INSERT INTO signup (firstname,lastname,username,mobile,email,password,rpassword,address) 
        VALUES ('$getfn','$getln','$getuser','$getmn','$getemail','$getpass','$getrpass','$getadd')";
        $result2=mysqli_query($con,$sql2);
        if($result2==true)
        {
        echo 'you have succesfully registered'; 

        }
        else
        {
         echo 'you have not registered';
         
         }
    }    
    }
else
{
    echo "Passwords don't match";
}
}
?>
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




    <link rel="icon" type="x-icon/image" href="to.jpg"><title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function check()
        {
            var x=document.getElementById('n6').value;
            var y=document.getElementById('n7').value;
            if(x!=y)
            {
               alert("Password not match");
               return false;
            }
        }
    </script>
</head>
<style>
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
</head>
<body background=" abcd.jpg">

     <!-- Start your project here-->
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
                <a class="nav-link"   href="football.html"><b>Football</b></a>
            </li>
            <li class="nav-item " >
                <a class="nav-link" href="players_basketball.html"><b>players info</b></a>
            </li>
        </ul>
    </div>
</nav>   
</div>


<Fieldset>
<form  method="post" onsubmit="return validation();">
<br><br><br><br>
  <div class="container">
  <div class="well"> 
    <center><legend> SIGNUP </legend></center>
    <div class="row">
     <div class="col-md-6">   
     <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="e1" id="e1" required>
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="e2" id="e2" required>
    <label><b>Username</b></label>
    <input type="text" placeholder="Different from first name" name="e3" id="e3" required>
    <label><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="e4" id="e4" required maxlength="10">
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="e5" id="e5" required>
</div>
     <div class="col-md-6">
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="e6" id="e6" required minlength="6" required maxlength="15">

    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="e7" id="e7" required minlength="6" required maxlength="15">
    <label><b>Address</b></label>
    <input type="text" name="e8" id="e8" placeholder="Enter your address" required=""><br>
    <br>
        </div>
    <br><br>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>

    <div class="clearfix">
      <a href="#"><button type="button" class="cancelbtn">Cancel</button></a>
      <button class="bu" type="submit" name="submit">Sign Up</button>
    </div>
  </div>
</form>
</Fieldset><br><br>
<!--footer-->
    <div
<!-- Footer -->
<footer class="page-footer font-small black pt-4 " >

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
                <a href="home.html"><b>Contact Us</b></a>
              </li>
              <li>
                <a href="home.html"><b>About Us</b></a>
              </li>
              
            </ul>

          </div>
          <!-- Grid column -->

         

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/">Sports Arena</a>
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
    <!--Code Above-->
</div>
</body>
</html>
