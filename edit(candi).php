<?php
 include ('conn.php');
 if (isset($_GET['id'])){
    $id = $_GET['id']; // Get the ID from the URL
    $sql = "SELECT * FROM candidate WHERE ID = '$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!-- HTML -- starts -->
<!DOCTYPE html>
<html>
<head>
	<title>Edit Of Candidate </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
.icon img{width: 15%;}
.icon h2{font-weight: bold;font-size: 35px;margin: 5px;}
#form{background: linear-gradient(45deg,coral,green,skyblue); 
   width: 98%;
   outline: 3px solid yellow;
   margin: 0 auto;
 }
#page{
  border-radius: 20px;
  background:rgba(0,0,0,0.6);
  width: 70%;
  height: 50%;
  display: flex;
}
form{
  width: 60%;
   font-size: 23px;
  background: rgba(0,0,0, 0.4); border-radius: 17px 0px 19px 0px;
}
form input{width: 70%;}
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
<div id="form" class="p-3">
	
	<form class=" form-group m-auto p-4 text-light" method="POST" action="save(candi).php" enctype="multipart/form-data">
		<h2 class="text-center text-light">Details of Candidate</h2>
		 <input type="hidden" name="id" value="<?php echo $row['ID'] ?>"/>
		<lebel>Name : <input type="text" name="name" class="form-control" required ='' value="<?php echo $row['Name'];?>" /></lebel>
		<label>Age:   <input type="text" name="age" class="form-control" required="" value="<?php echo $row['Age'];?>" /></label>
		<label>Email:  <input type="email" name="email" class="form-control" required="" value="<?php echo $row['Email'];?>" /></label><br>
		<label>Party :
		<input type="text" name="party" class="form-control" required="" value="<?php echo $row['Party'];?>" /></label><br>
		<label>Image :
			<input type="file" name="img" class="form-control m-2 " required="" />
		</label>
		<button class="btn btn-success m-2 p-2" nmae ='btn'>Submit</button>
	</form>
	 
</div>
</body>
</html>




 