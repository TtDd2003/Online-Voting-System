<?php
include ('conn.php');

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
#list{ width: 70%;}
#elec{ width: 100%;margin: 0 auto;}
#nav{display: flex; justify-content: space-between;}
#nav ul li{
   display: inline-block;font-size: 18px;
}
#v1{ margin: 0 auto; }
footer p{font-size: 20px;}
 </style>
</head>
<body class="p-1">
<nav class="navbar bg-dark text-light m-auto">
    <div class="icon">
		 <img src="./img/12.JPG">
     	<h2 >oteHUB</h2>
     </div>
 <p class="display-4">Onlive Voting System</p>
 <p class="p">User Panel</p>
</nav>

<div>
    <h5 class="text-center">Welcome - <?php echo $_SESSION['email']; ?><h5>
</div>

<div id="nav" class="bg-info navbar text-light my-1 p-1">
    <ul class=" m-auto">
        <li class="nav-item"><a href="Home.php" class="nav-link text-light">Home</a></li>
        <li class="nav-item"><a href="candi2.php" class="nav-link text-light">Show Candidates</a></li>
        <li class="nav-item"><a href="dashboard.php" class="nav-link text-light">Dashboard</a></li>
        <li class="nav-item"><a href="Result_1.php" class="nav-link text-light">View Results</a></li>
    </ul>
    <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
</div>

<div id="page" class="row my-3">
    <div id="list" class="m-auto">
        <h3 class="text-center">Election List</h3>
        <div id="elec" class="col-11">
            <table class="table table-hover table table-striped table-responsive table-bordered">
                <thead class="text-center bg-warning">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Candidates</th>
                        <th scope="col">Starting</th>
                        <th scope="col">Endings</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center font-weight-bold">
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM election") or die(mysqli_error($conn));
                        $add = mysqli_num_rows($query);
                        if ($add > 0){
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                    ?>   
                        <tr class="text-center">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['Topic']; ?></td>
                            <td><?php echo $row['Members']; ?></td>
                            <td><?php echo $row['Start_date']; ?></td>
                            <td><?php echo $row['End_date']; ?></td>
                            <td><?php echo $row['Status']; ?></td>
                            <td class="td">
                                <!-- View button to show election details -->
                                <a href="view.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-success">View</button></a>&nbsp;&nbsp;
                                
                                <!-- Result button to show election results -->
                                <a href="result.php?id=<?php echo $row['ID']; ?>"><button class="btn btn-secondary">Result</button></a>
                            </td>
                        </tr>
                    <?php
                            }
                        } else {
                    ?>
                        <tr>
                            <td colspan="7">No election added yet.</td>
                        </tr>
                    <?php        
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

	  	</tbody>
	  </table>
    </div>
  </div>
</div>
<footer class="bg-dark text-light text-center p-1">
	<p>&copy; copyright 2024 - All Right are reserved 
	Developed by TRI TECH Solution ..</p>
</footer>
</body>
</html>
<!--
	-->