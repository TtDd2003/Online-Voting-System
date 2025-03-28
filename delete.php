<?php
include('conn.php');
 if(isset($_GET['id'])){
     	$id = $_GET['id'];
     	$sql= "DELETE FROM election WHERE ID = '$id' ";
     	$result= mysqli_query($conn,$sql) ;
     	if($result){
           header('location:admin.php');
     	}else{
          die('Connection_failed:'.mysqli_connect_error());
     	}
     }

?>