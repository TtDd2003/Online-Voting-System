<?php
include("conn.php");

  if (isset($_GET['id'])){
    $id = $_GET['id']; // Get the ID from the URL
    $sql = "SELECT * FROM election WHERE ID = '$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<!--  HTML -->
<!DOCTYPE html>
<html>
<head>
  <title>Edit -Admin  </title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
  <style >
  	nav{
	font-family: roboto-mono;
	display: flex;
}
nav .p{font-size: 23px;font-style: italic;}
.icon{
	display: flex;
	width: 28%;
	font-style: italic;
	border-left: 7px solid #fff;
	padding: 10px;
}

.icon img{
	width: 15%;
}
.icon h2{
	font-weight: bold;font-size: 35px;margin: 5px;
}
body{background: linear-gradient(45deg,coral,green,skyblue);}
#page{
   border-radius: 17px 0px 19px 0px;
  background:rgba(0,0,0,0.6);
  width: 70%;
  height: 50%;
  display: flex;
}
select{
  width: 70%;
}
form{
  width: 100%; 
}
</style>
</head>
<body>
	<nav class="navbar bg-dark text-light ">
    <div class="icon">
		 <img src="./img/12.JPG">
     	<h2 >oteHUB</h2>
     </div>
 <p class="display-4">Online Voting System</p>
 <p class="p">Admin Panel</p>
</nav>
                                       <!-- php starts--> 


 <div id="page" class="col m-auto p-3 text-light" >
  <form class="form-group p-3" method="POST" action="save.php">
    <h3>Topic :</h3>
    <input type="hidden" name="id" value="<?php echo $row['ID'] ?>"/>
    <input type="data" name="topic" class="form-control m-2" value="<?php echo $row['Topic'];?>" />
    <b>Members</b><input type="data" name="no" onfocus="this.type='number'" class="form-control m-2" value="<?php echo $row['Members'] ?>" />
    <b>Starting Date</b><input type="Date" name="sd" onfocus="this.type='Date'" class="form-control m-2" value="<?php echo $row['Start_date'] ?>" />
    <b>Ending Date</b><input type="Date" name="ed" onfocus="this.type='Date'" class="form-control m-2" value="<?php echo $row['End_date'] ?>" /><br>
    
    <h2>Candidate</h2>
    <div class="m-2 p-3">
        <input type="text" name="candi" class="form-control" value="<?php echo $row['Candidates'];?>" required/>
    </div>
    
    <input type="submit" name="submit" value="UPDATE" class="btn btn-success p-2 m-2" id="btn"><br>
</form>
  </div>
</body>
</html>


