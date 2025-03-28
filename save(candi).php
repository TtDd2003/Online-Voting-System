<?php
  include("conn.php");

   if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $party = $_POST['party'];
    $pre_img = $_FILES['img'];
    $image = $_FILES['img']['name'];

  if($img!= ''){
    $destiny = $image ;
    if(file_exists("img/".$_FILES['img']['name']))
    {
        $filename = $_FILES['img']['name'];
        $_SESSION['status']= "Imagre already exists.";
        header("location:set_candidate");
    }
  }
  else{
    $desiny = $pre_img;
  }

  $update = "UPDATE candidate SET Name='$name',Email='$email',Age='$age',Party='$party',Image='$destiny' WHERE ID = '$id' ";
   if($update){
    echo("Record has been changes succesfully..");
   }
   else{
    echo "Error in uploading..";
   }
}
?>