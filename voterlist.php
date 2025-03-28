<?php
  include('conn.php');
?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Voter List</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
  <style >
  	#page{outline: 3px solid gray; width: 85%; text-align: center;}
    table{ width: 100%;}
  </style>
</head>
<body>
	<h3 class="text-center">Voter List</h3>
  <div id="page" class="  m-auto">
  	<table class="table table-striped table-hover table-bordered table-responsive  p-3 m-auto">
  		<thead class="bg-dark text-light">
  			<tr class="text-center">
  				<th class="col-1">No</th>
  				<th>User ID</th>
  				<th scope="col">Name</th>
  				<th scope="col">Email</th>
  				<th scope="col">Gender</th>
  				<th scope="col">Age</th>
  				<th scope="col">Phone No </th>
  				<th scope="col">Voter ID</th>
  				<th scope="col">Action</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php
                 $query = mysqli_query($conn,"SELECT * FROM sign ") ;
            	$add = mysqli_num_rows($query) or die(mysqli_error($conn));
            	if ($add > 0){
            		$no =1;
                	while($row = mysqli_fetch_assoc($query))
                	{
            ?>   
            		<tr class="text-center bg-info text-light">
        	  			<td><?php echo $no++; ?></td>
        	  			<td><?php echo $row['UserID']  ;?></td>
        	  			<td><?php echo $row['Full_Name']; ?></td>
        	  			<td><?php echo $row['Email']; ?></td>
        	  			<td><?php echo $row['Gender']; ?></td>
        	  			<td><?php echo $row['Age']; ?></td>
        	  			<td><?php echo $row['Phone']; ?></td>
        	  			<td><?php echo $row['VoterID']; ?></td>
        	  			<td class="td">
	  				        <a href=""><button class="btn btn-warning">Edit </button></a>&nbsp;&nbsp;
	  			            <a href=""><button class="btn btn-danger">Delete</button></a>
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
  </div>
</body>
</html>