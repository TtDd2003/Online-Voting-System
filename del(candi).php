<?php
include('conn.php');
 if(isset($_GET['id'])){
    
  }
 ?>
     	<script >
     		alert("Do you really wanna delete this candidate?");
     	</script>
    <?php
     	$sql= "DELETE FROM candidate WHERE ID = '$id' ";
     	$result= mysqli_query($conn,$sql) ;
     	if($result){
           header('location:admin.php');
     	}else{
          die('Connection_failed:'.mysqli_connect_error());
     	}
     

?>