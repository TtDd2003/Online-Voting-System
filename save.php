<?php
  include("conn.php");

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $topic = $_POST['topic'];
    $members = $_POST['no'];
    $SD = $_POST['sd'];
    $ED = $_POST['ed'];

    // Check if 'candi' exists in $_POST
    if (isset($_POST['candi']))
    {
        $candidates = $_POST['candi'];
    } else {
        die("Error: Candidate input is missing.");
    }

    $query = "UPDATE election SET Topic ='$topic', Members ='$members', Candidates ='$candidates', Start_date ='$SD', End_date ='$ED' WHERE ID = '$id'";

    $output = mysqli_query($conn, $query) or die("Query unsuccessful!!..");
    echo("Record has been updates..");
}
  
?>