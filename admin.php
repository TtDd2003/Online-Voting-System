<?php
include('conn.php');

if (isset($_POST['btn'])) {

    // Escape user inputs for security
    $topic = mysqli_real_escape_string($conn, $_POST['topic']);
    $members = mysqli_real_escape_string($conn, $_POST['no']);
    $candidate = mysqli_real_escape_string($conn, $_POST['candi']);
    $SD = mysqli_real_escape_string($conn, $_POST['sd']);
    $ED = mysqli_real_escape_string($conn, $_POST['ed']);
    $VB = $_SESSION['email'] ;
    $VO= date("Y-m-d");

    // date function 
    $d1 = date_create($VO);
    $d2 = date_create($SD);
    $diff = date_diff($d1,$d2);

    if( $diff->format(" %R%a ")>0){
    	$status ="Inactive";
    }else{
    	$status =  "Active";
    }

    $sql = "INSERT INTO election (Topic, Members,Candidates, Start_date, End_date,Status,Inserted_by,Vote_Date) 
                    VALUES ('$topic', '$members','$candidate', '$SD', '$ED','$status','$VB','$VO')";
            
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('new Election added Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Election page </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">             
	<style >
		*{margin: 2px;}
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
#nav{display: flex; justify-content: space-between;background-color: #1974D2;}
#nav ul{ display: flex;justify-content: space-around;}
#nav ul li{display: inline-block;font-size: 19px;}
#form{ display:block;}
table{ width:100%; }
#elec{ width:100%;}
#page{display: flex; justify-content: space-around;}
#form{ width: 30%;}
@media (max-width: 1100px){

  #page{display: flex;flex-direction: column;}
  #form{margin: 0 auto; width: 50%;}
  #list{margin: 0 auto; width: 85%;}
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
<div id="nav" class=" text-light my-1 p-1">
	<ul class="col-8 m-auto">
		<li class="nav-item"><a href="Home.php" class="nav-link text-light">Home</a></li>
		<li class="nav-item"><a href="set_candidate.php" class="nav-link text-light">Manage Candidates</a></li>
		<li class="nav-item"><a href="voterlist.php" class="nav-link text-light">Voter List</a></li>
    <li class="nav-item"><a href="dashboard.php" class="nav-link text-light">Dasboard</a></li>
    <li class="nav-item"><a href="Result_1.php" class="nav-link text-light">Results</a></li>
	</ul>
	<a href="logout.php"><button class="btn btn-success">Logout</button></a>
</div>
<div id="page" class="m-1">
 <div id="form" >
	<h3 class="text-center">Add Election</h3>
	<form class="form-group p-3 m-2" method="POST" action="">
		<input type="text" name="topic" class="form-control m-2 " required="" placeholder="topic" />
		<input type="number" name="no" onfocus="this.type='number' " class="form-control m-2"/ required="" placeholder="members">
    <input type="text" name="candi" placeholder="select candidates " class="form-control m-2 " required="">
		<input type="text" name="sd" onfocus="this.type='Date'" class="form-control m-2" required="" placeholder="starting_date" />
		<input type="text" name="ed" onfocus="this.type='Date'"  class="form-control m-2" placeholder="ending_date"required=""/>
		<input type="submit" name="btn" value="Add" class="btn btn-secondary"/>
	</form>
  </div>
 <div id="list" class="m-auto">
    <h3 class="text-center">ElectionList</h3>
    <div id="elec" class=" m-auto" >
	  <table class="table table-striped table-hover  table-responsive  p-2 m-auto">
	  	<thead>
	  		<tr class="text-center">
	  			<th scope="col">No</th>
          <th scope="col">ID</th>
	  			<th scope="col">Name</th>
	  			<th scope="col">Candidates</th>
	  			<th scope="col">Date</th>
	  			<th scope="col">Ending</th>
	  			<th scope="col">Status</th>
	  			<th scope="col">Action</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  	    <?php
                 $query = mysqli_query($conn,"SELECT * FROM election ") ;
            	$add = mysqli_num_rows($query) or die(mysqli_error($conn));
            	if ($add > 0){
            		$no =1;
                	while($row = mysqli_fetch_assoc($query))
                	{
            ?>   
            		<tr class="text-center">
        	  			<td><?php echo $no++; ?></td>
                  <td><?php echo $row['ID']; ?></td>
        	  			<td><?php echo $row['Topic']; ?></td>
        	  			<td><?php echo $row['Members']; ?></td>
        	  			<td><?php echo $row['Start_date']; ?></td>
        	  			<td><?php echo $row['End_date']; ?></td>
        	  			<td><?php echo $row['Status']; ?></td>
        	  			<td class="td">
	  				        <a href="edit.php?id=<?php echo $row['ID'];?>"><button class="btn btn-warning">Edit </button></a>&nbsp;&nbsp;
	  			            <a href="delete.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-danger">Delete</button></a>
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
  </div>
</div>

</body>
</html>