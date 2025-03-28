<?php
include("conn.php");

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
		#full{width: 100%;}

		 table{width: 90%; box-shadow: 7px 7px 7px gray;}

		 #add{outline: 3px solid green;margin: 4%; border-top: 8px green solid;}

		 form{width: 100%;}

		 input{display: block;}

		 button{float: right;}

		.td{ display: flex; justify-content: space-around;}
	</style>
</head>
<body>
	<h2 class="text-center mt-3 "><b><ins>List of Candidates</ins> </b></h2> 
	<button class="btn btn-success mr-3" onclick="on()">Add +</button>
	<div id="full" class=" container  m-auto">
		<table class="table table-striped table-hover  table-responsive  p-2  ">
			<thead class="thead-dark">
	  		<tr class="text-center p-2 col-3 ">
                <th class="col-1">ID</th>
                <th class="col-1">Image</th>
	  			<th class="col-2">Name</th>
	  			<th class ="col-1">Age</th>
	  			<th class="col-1">Part</th>
	  			<th class="col-1">Email</th>
	  			<th class="col-1">Status</th>
	  			<th class="col-2">Action</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php
                 $query = mysqli_query($conn,"SELECT * FROM candidate") ;
            	$add = mysqli_num_rows($query) or die(mysqli_error($conn));
            	if ($add > 0){
            		$no =1;
                	while($row = mysqli_fetch_assoc($query))
                	{
            ?>   
	  		<tr class=" text-center ">
  	 					<td class="bg-warning" ><?php echo $row['ID']; ?></td>
  	 					<td ><img src="<?php echo $row['Image'];?>" height= '70px' width='70px'> </td>
  	 					<td><?php echo $row['Name']; ?></td>
  	 					<td><?php echo $row['Age']; ?></td>
              <td><?php echo $row['Party']; ?></td>
  	 					<td><?php echo $row['Email']; ?></td>
  	 					<td>appointed</td>
  	 					<td class="td ">
	  				        <a href="edit(candi).php?id=<?php echo $row['ID'];?>"><button class="btn btn-primary">Edit </button></a>
	  			            <a href="del(candi).php?id=<?php echo $row['ID']; ?>"><button class="btn btn-danger">Delete</button></a>
	  			        </td>
  	 		</tr>
  	 		<?php
                	}
            }
            	else
            	{
        	?>
             	<tr>
             		<td colspan="7">No any election added yet.</td>
             	</tr>
        	<?php        
           	 }

	  		?> 	 		
	  	</tbody>
		</table>
		<div id="add" class=" col-7 align-items-center justify-content-center m-auto">
		<h4>Add new cadidates </h4>
		<form class="form-group p-3 m-2" method="POST" action="" enctype="multipart/form-data">
			<label>Full Name:
			<input type="text" name="name" class="form-control m-2 " required="" /></label>

			<label>Image:
			<input type="file" name="img" class="form-control m-2 " required="" /></label>
			<label>Age:
			<input type="text" name="age" class="form-control m-2 " required="" /></label>
			<label>Party:
			<input type="text" name="party" class="form-control m-2 " required="" /></label>
			<label>Email:
			<input type="email" name="email" class="form-control m-2 " required="" /></label>
			<input type="submit" name="btn" class="ml-3"/>
		</form>
	</div>
	</div>
	
</body>
<script >
	const myDiv = document. querySelector('#add');
	myDiv. addEventListener('click', function());
</script>
</html>
<!--<img src="./img/1.PNG" class="img-fluid">
<img src="./img/3.PNG">
<img src="./img/2.PNG">
<img src="./img/6.JPG">
table-danger