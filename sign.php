<?php
   include ('conn.php');  
   
   if(isset($_POST['btn'])){
    $name= mysqli_real_escape_string($conn, $_POST['name']); 
    $email= mysqli_real_escape_string($conn, $_POST['email']); 
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']); 
    $password= mysqli_real_escape_string($conn, $_POST['pass']); 
    $confirm= mysqli_real_escape_string($conn, $_POST['confirm']);
    $gender =  mysqli_real_escape_string($conn, $_POST['sex']);
    $type = mysqli_real_escape_string($conn, $_POST['role']); 
    $voter = mysqli_real_escape_string($conn, $_POST['voter']); 

    //$hashed= sha1($password);
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $query= mysqli_query($conn, "SELECT * FROM sign  WHERE FULL_Name = '$name' OR Email = '$email' ");
    if($query && $query->num_rows > 0){
?>
        <script>
                 alert("You cann't Assign youself again!!");
              </script>";
<?php
    } else 
    {
      if($password == $confirm){

      $sql = "INSERT INTO sign (Full_Name, Email, Age, Gender, Phone, Password, type, VoterID) VALUES ('$name', '$email', '$age', '$gender', '$phone', '$hashed', '$type', '$voter')";
          $result=mysqli_query($conn,$sql) ;
            header('location:Home.php');
?>
       <script>
         alert('Password Does not Match!!');
            </script>";
<?php            

      }  
      else{
        
      }
    }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-up page </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
  <style >
    body{
      background-color:  #E6E6FA;
    }
  	#full{
  		width: 80%;
      height: auto;
      margin: 2% auto;
  		padding: 10px;
      border-radius: 14px;
      background-color: #fff;
      box-shadow: 7px 7px 7px darkgray;
}
#form form {
      display: flex;
      justify-content: space-between;
      width: 80%;
      padding: 10px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
}
    #left{width: 55%; margin: 33px auto; }
  	#left input {
  		width: 90%;
      padding: 19px;
  	}
  	 input{
  		width: 70%;
  		margin: 0 auto;
  	}
  	 button{
  		width: 80%;
  		margin: 0 auto;
  	}
  	#btn1{background-color: #0041C2;}
  	#btn2{outline: 2px solid gray;}
  	#right{
  		width: 50%;
  		margin: 30px auto;
  		padding: 10px;
  	}
  	#right a{text-decoration: none;}
    
  </style>
</head>
<body>
<div id="full">
    <h2 class="text-center">Sign Up</h2>
    <div id="form">
      <form class="form" method="POST" action=" " autocomplete="on">
        <div id="left" class="mt-2">
         <input type="text" id="name" name="name" placeholder ="Enter your name " class="form-control" required=""><br>
          <input type="email"  id="email" name="email" placeholder ="email"  class="form-control " required=""><br>
          <input type="text" name="age" placeholder="Age" class="form-control" required=""><br>
          <input type="text" name="phone" placeholder="Mobile" class="form-control" required=""><br>
          <input type="password"  id="password" name="pass" placeholder= "Password" class="form-control" required=""><br>
          <input type="password" id="pass" name="confirm" placeholder ="Confirm Password" class="form-control" required=""><br>
        </div>

        <div id="right" class="mt-2">
          <select name="sex" class="form-control" >
           <option value="Male">Male</option>
           <option value="Female">Female</option>
           <option value="Others">Others</option>
          </select><br>
          <select name="role" class="form-control" >
           <option value="user">user</option>
           <option value="admin">admin</option>
          </select><br>
          <input type="text" name="voter" placeholder="VoterID" class="form-control" required=""><br>
       <input type="submit" id ="sign" name="btn" value="Sign up" class="form-control btn-primary">
       <p class="text-center">Already have an account ?<a href="login.php">Login</a></p>
       <p class="text-center" style="line-height: 10px;">__________________or__________________</p><br>
      <a href=""><button class="form-control btn-light" id="btn2"><i class="fa-brands fa-google"></i>&nbsp;&nbsp;&nbsp;&nbsp;Login with Google</button></a>
      </div>

      </form>
    </div>
 </div>
</body>
</html>
<!--<i class="fa-solid fa-eye-slash"></i>


      

