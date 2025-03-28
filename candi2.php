<?php
include("conn.php"); // Include your database connection file

if (isset($_POST['btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $age =  mysqli_real_escape_string($conn, $_POST['age']);
    $party = mysqli_real_escape_string($conn, $_POST['party']);
    $image = $_FILES['img'];

    $filename = $image['name'];
    $fileerror = $image['error'];
    $filetemp = $image['tmp_name'];

    if ($fileerror === 0) {
        $destiny = 'img/' . $filename; // Path to save the image
        move_uploaded_file($filetemp, $destiny); // Move the file to the desired directory

        // Insert image path and other data into the database
         $query= mysqli_query($conn, "SELECT * FROM candidate WHERE Name = '$name' OR Email = '$email' ");
          if($query && $query->num_rows > 0){
       ?>
        <script>
                 alert("You cann't Assign same candidate  again!!");
              </script>";
<?php
    } else{
         $sql = "INSERT INTO candidate (Name, Email,Age,Party, Image) VALUES ('$name', '$email', '$age', '$party', '$destiny')";
       }
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Image uploaded successfully.')</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading image.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Candidates of Election</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style >
		#containt{
           display: grid;
           grid-template-columns: 2fr 2fr 2fr;
           grid-gap:20px;

		}
		.card{
			box-shadow: 3px 3px 3px lightgray;
			padding: 18px;
			text-align: center;
		}
		#button{display: flex; flex-wrap: wrap;justify-content: space-between;}

		#button button{background-color: aqua;width: 63%; border: none;border-radius: 8px;}

		#button a{color: blue; text-decoration: none;}

		#button .btn{background-color: red;color: #fff; width:60%;transition: 0.6s ; border-radius: 8px; margin: 0 auto;}
		#button .btn:hover{transform: scale(1.1);}

         #containt img{border-radius: 60%;  width: 50%; margin: 0 auto;}
         #l{float: right;}
	</style>
</head>
<body>

	<div id="page" class="bg-light p-5">
		<a href="login.php" ><button class="btn btn-info text-light p-2 m-2" id=l>Login </button></a>
		<p class="display-4 text-center"><b>Candidates : </b> of Election </p>

		<?php
                 $query = mysqli_query($conn,"SELECT * FROM candidate") ;
            	$add = mysqli_num_rows($query) or die(mysqli_error($conn));
            	if ($add > 0){
            		$no =1;
                	while($row = mysqli_fetch_assoc($query))
                	{
            ?>   


	   <div id="containt">
		<div id="c1" class="card car-border">
			<img src="<?php echo $row['Image'];?>" class="img img-fluid">
			<h4 class="text-center"> <?php echo $row['Name']; ?> </h4>
			<h5><i class="fa-solid fa-thumbs-up"></i>&nbsp; Votes</h5>
			<h4>  <?php echo $row['Party']; ?> </h4>
			<h5>Running to Be:  President </h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<input type="submit" name="button" value="Vote" class="btn" onclick="fun()"/>
		    </div>
		</div>

		

		
	  </div>	
	</div> <!-- page--->
<?php
  }
}

?>

<script type="text/javascript">
	function fun(){
		alert("Please login before vote");
	}

</script>
</body>
</html>