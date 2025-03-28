<!DOCTYPE html>
<html>
<head>
	<title>Candidates of Election</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style >
		#containt{
           display: grid;
           grid-template-columns: 2fr 2fr 2fr;
           grid-gap:30px;
		}
		.card{
			box-shadow: 3px 3px 3px lightgray;
			padding: 18px;
			text-align: center;
		}
		#button{display: flex; flex-wrap: wrap;justify-content: space-between;}

		#button button{background-color: aqua;width: 63%; border: none;border-radius: 8px;}

		#button a{color: blue; text-decoration: none;}

		#button .btn{background-color: red;color: #fff; width:34%;transition: 0.6s ; border-radius: 8px;}
		#button .btn:hover{transform: scale(1.1);}

         #containt img{border-radius: 60%;  width: 50%; margin: 0 auto;}
         #l{float: right;}
	</style>
</head>
<body>
	<div id="page" class="bg-light p-5">
		<a href="login.php" ><button class="btn btn-info text-light p-2 m-2" id=l>Login </button></a>
		<p class="display-4 text-center"><b>Candidates : </b> of Election </p>
	   <div id="containt">
		<div id="c1" class="card card-border">
			<img src="./img/6.JPG" class="img img-fluid">
			<h4 class="text-center">Fredric Decade</h4>
			<h5><i class="fa-solid fa-thumbs-up"></i>&nbsp; Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a><input type="submit" name="button" value="Vote" class="btn" onclick="fun()"/>
		    </div>
		</div>

		<div id="c2" class="card car-border">
			<img src="./img/1.PNG" class="card-img">
			<h4>Jeneliya Dechosta</h4>
			<h5><i class="fa-solid fa-thumbs-up"></i>&nbsp; Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href=".php">View</button></a><input type="submit" name="button" value="Vote" class="btn" onclick="fun()" />
		    </div>
		</div>

		<div id="c3" class="card car-border">
			<img src="./img/77.JPEG" class="card-img">
			<h4>Suzaine Farnahdhise</h4>
			<h5><i class="fa-solid fa-thumbs-up"></i>&nbsp; Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="dash.php">View</button></a><input type="submit" name="button" value="Vote" class="btn">
		    </div>
		</div>

		<div id="c4" class="card car-border">
			<img src="./img/55.JPG" class="card-img">
			<h4>Hiroshi Nohara</h4>
			<h5><i class="fa-solid fa-thumbs-up"></i>&nbsp; Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn">
		    </div>
		</div>

		<div id="c5" class="card car-border">
			<img src="./img/3.PNG" class="card-img img-fluid">
			<h4>Shizuka Minamoto</h4>
			<h5> <i class="fa-solid fa-thumbs-up"></i>&nbsp;Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="dash.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn">
		    </div>
		</div>

		<div id="c6" class="card car-border">
			<img src="./img/2.PNG" class="card-img">
			<h4>Bow Chan</h4>
			<h5> <i class="fa-solid fa-thumbs-up"></i>&nbsp;Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn"/>
		    </div>
		</div>

		<div id="c7" class="card car-border">
			<img src="./img/4.JPEG" class="card-img">
			<h4></h4>
			<h5> <i class="fa-solid fa-thumbs-up"></i>&nbsp;Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn"/>
		    </div>
		</div>

		<div id="c8" class="card car-border">
			<img src="./img/44.JPEG" class="card-img">
			<h4>Fredric</h4>
			<h5> <i class="fa-solid fa-thumbs-up"></i>&nbsp;Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn"/>
		    </div>
		</div>

		<div id="c9" class="card car-border">
			<img src="./img/79.JPG" class="card-img">
			<h4>Trinita Das </h4>
			<h5> <i class="fa-solid fa-thumbs-up"></i>&nbsp;Votes</h5>
			<h4>Mesho</h4>
			<h5>Running to Be: President</h5>
			<p> Hi i am Trinita Das and i have been here to be a president of our lokshova with your support</p>
			<div id="button">
			<button ><a href="view.php">View</button></a> <input type="submit" name="button" value="Vote" class="btn"/>
		    </div>
		</div>
	  </div>	
	</div> <!-- page--->

<script type="text/javascript">
	function fun(){
		alert("Please login before vote");
	}

</script>
</body>
</html>