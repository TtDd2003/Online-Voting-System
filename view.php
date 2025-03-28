<?php
include('conn.php');         
?>
<!DOCTYPE html>
<html>
<head>
	<title>View About Election Deatils </title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <style >
  	#full{background:linear-gradient(to bottom,coral,white,90%,green)  ;}
  	#head{ width: 98%; }
  	#body{
  		display: flex;
      flex-direction: row;
      justify-content: space-around;
  	}
  	#div{ width: 80%;padding: 3%;margin: 20px auto;}
    #div img{width: 70%; border-radius: 50%;}
    input{width: 70%;}
  </style>
</head>

<body>
<div id="full" class="p-2">
	
     <!-- php starts-->
<?php 
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Sanitize input
    $sql = "SELECT * FROM election WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful!");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['election_id'] = $row['ID']; // Store election ID in session for later use
        ?>
        <div id="head" class="m-auto p-2">
            <h2 class="display-4 text-center"><b><ins>Election on head</ins></b></h2>
            <h5 class="text-center">Post: <b><?php echo $row['Topic']; ?></b></h5>
            <h5 class="text-center">Election ID: <?php echo $row['ID']; ?></h5>
            <h5 class="text-center">Total Candidates: <?php echo $row['Members']; ?></h5>
        </div>
        <?php
    } else {
        echo "No results found.";
    }
}
?>

<div id="body">
    <!-- Fetch candidates for the selected election -->
    <?php
    $join = "SELECT c.ID, c.Name, c.Image, c.Party, COUNT(v.CandidateID) AS VoteCount 
              FROM candidate c
              LEFT JOIN count v ON v.CandidateID = c.ID 
              JOIN election e ON FIND_IN_SET(c.ID, e.Candidates)
              WHERE e.ID = '$id'
              GROUP BY c.ID";
    $statement = mysqli_query($conn, $join);

    if ($statement && mysqli_num_rows($statement) > 0) {
        echo '<div id="body">';
        while ($candidate = mysqli_fetch_assoc($statement)) {
            ?>
            <form method="POST" action="VOTE.php">
               <div class="card bg-light" id="div">
                   <img src="<?php echo htmlspecialchars($candidate['Image']); ?>" height="50px" width="50px" class="img img-fluid m-auto">
                   <h4 class="text-center"><?php echo htmlspecialchars($candidate['Name']); ?></h4>
                   <h5 class="text-center"><i class="fa-solid fa-thumbs-up"></i>&nbsp; <?php echo $candidate['VoteCount']; ?> votes</h5>
                   <h4 class="text-center"><?php echo htmlspecialchars($candidate['Party']); ?></h4>
                   <h5 class="text-center">Running to Be: President</h5>
                   <p class="text-center">Hi, I am <?php echo htmlspecialchars($candidate['Name']); ?>, and I am here to be president of our Lokshova with your support.</p>

                   <!-- Hidden input for candidate and election ID -->
                   <input type="hidden" name="candidate_id" value="<?php echo htmlspecialchars($candidate['ID']); ?>" required />
                   <input type="hidden" name="election_id" value="<?php echo htmlspecialchars($electionID); ?>" required />

                   <input type="submit" name="btn" value="Vote" class="btn btn-primary m-auto text-light"/>
                </div>
            </form>

                  <?php
        }
        echo '</div>';
    } else {
        echo "No candidates found for this election.";
    }
    ?>
</div>

</div>
</div>
</body>
</html>