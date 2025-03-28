<?php
   include ('conn.php');

if (isset($_POST['btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']); // Sanitize user input
    $voter = mysqli_real_escape_string($conn, $_POST['voter']);
    $password = $_POST['pass'];

    $query = "SELECT * FROM sign WHERE Email = '$email' AND VoterID = '$voter' ";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed= $row['Password'];
        $_SESSION['email'] = $row['Full_Name'];
        $role= $row['type'];
        if (password_verify($password, $hashed))
        {
        	if($role == "admin"){
                header("location:admin.php");
                exit();
        	}else{
        		header("location:elec.php");
        		exit();
        	}
            
        } else {
            echo "Incorrect password!";  // verify--
        }
    } // rows--
     else {
        echo "User not found!";
    }
    mysqli_close($conn);
} // isset --
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css" integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
	<style >
		*{box-sizing: border-box;}
		#page{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
	        height: 500px;
			width: 90%;
			display: flex;
			background-color: #fff;
			box-shadow: 0 10px 30px rgba(0,0,0,0.5);
		}
		#login{
			width: calc(90% - 30%);
			height: 100%;
			font-family: roboto-mono;
			background-color: #fff;
			border-right: #fff solid 40px;
			border-bottom: 300px solid #fff;
			box-sizing: border-box;
		}
		#login form{margin: 2% auto; }
		#back{
			width: calc(60% + 24px);
			padding: 2%;
	         height: 100%;
			border-left: 83px solid #fff;
			border-bottom: 430px solid transparent;
			box-sizing: border-box;
			background-color:#6f2DA8;
			color: #fff;	
		}
		#back button{
			border:2px solid #fff;
			background-color: transparent;
			border-radius: 13px;
			color: #fff;
			padding: 15px;
			width: 30%;
			transition: 0.4s ease;
		}
		#back button:hover{background-color: #4E387E;}
		#page form{width: 90%;padding: 4%;}
		#page input{width: 67%;}
		#button{background-color:#B048B5;color: #fff;margin: 0 50%; width: 25%;padding: 1%; border-radius: 15px; border:none;}
		#btn{width: 70%; margin: 0 30%;}
		#btn button{width: 34%;}
		#btn button i{font-size: 23px;}
		#btn1{background-color:#5CB3FF;color: #fff; width: 18%;padding: 1%; border-radius: 15px; border:none;}
		#btn2{background-color:#0041C2;color: #fff; width: 25%;padding: 1%; border-radius: 15px; border:none;}
	</style>
</head>
<body>
<div id="page">
	<div id="login">
		<form class="form-group" method="POST" action="">
			<h1><b>Login</b></h1>
		<h4 class="text-dark">Don't have an account ? Create your account </h4>
		<input type="text"  id="voter" name="voter" placeholder ="VoterID"  class="form-control " required=""><br>
		<input type="text"  id="email" name="email" placeholder =" email"  class="form-control " required=""><br>
		<input type="password"  id="password" name="pass" placeholder= "Password" class="form-control" required=""><br>
		<p>Forgot Password ? </p>
		<button id="button" type="submit" name="btn" >Sign In </button>
		<h5>Or Login With </h5>
		   <div id="btn">
		     <a href="#"><button id="btn1"><i class="fas fa-brands fa-twitter"></i></button></a> <a href="#"><button id="btn2"><i class="fa-brands fa-facebook"></i></button></a>
		   </div>
		</form>
	</div>
	<!-- right div-->
	<div id="back">
		<h1>Welcome Back</h1>
		<p>Simply create your account by clicking the button</p>
		<p>If you don't have an account then please create it with join </p>
		<a href="sign.php"><button>Sign Up</button></a>
	</div>
   <i class="fa-solid fa-arrow-right-arrow-left"></i>
</div>
</body>
</html>