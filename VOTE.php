<?php
include("conn.php");

if (isset($_POST['btn'])) {
    if (isset($_POST['candidate_name'])) {
        $_SESSION['candidate_name'] = htmlspecialchars($_POST['candidate_name']);
        $candidateName = $_SESSION['candidate_name'];
      
        echo "<script>alert('Your vote has been given for " . $candidateName . ".');</script>";
        if (isset($_SESSION['candidate_name'])) {
    			echo "<h2>You voted for: " . htmlspecialchars($_SESSION['candidate_name']) . "</h2>";
    }
        exit();
    } else {
        echo "<script>alert('No candidate name provided.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Count of votes..</title>
</head>
<body>
     
</body>
</html>