<!DOCTYPE html>
<html>
<head>
  <title>First Page </title>
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
  <style >
   *{
  		margin: 3px ;
  		padding: 3px;
  	}
.icon{
	display: flex;
	width: 28%;
	font-style: italic;
	border-left: 7px solid black;
	padding: 10px;
}
.icon img{
	width: 15%;
}
.icon h2{
	font-weight: bold;
}
#containt{
	width: 50%;
	font-family: "Times New Roman";
	padding: 5%;
	background-color: #fff;
	font-size: 1.0rem;
}
#containt h5{
	border-top:5px solid red;
	width: 60%;
}
#containt h1{font-weight: bold;}
#containt button{
	background-color: coral;
	color: #fff;
	border-radius: 10px;
	width: 20%;
	font-size: 20px;
	transition: 0.6s ease;
}
#containt button:hover{
	transform: scale(1.0);
	background-color: orangered;
}
#img img{
	width: 100%;
	margin-top: 3%;
	height: auto;
}
 nav{
	font-family: roboto-mono;
}
nav a{
	padding: 4px;
	font-size: 19px;
	transition: 0.6s ease;
}
nav a:hover{
	transform: scale(1.1);
	text-decoration: none;
}
#page{
	display: flex;
}
@media (max-width:1000px){
    #page{display: block;}
    #containt{
    	margin: 0 auto;
    	width: 80%;
    }
    #img{
    	margin: 0 auto;
    	width: 80%;
    }
    #img img{width: 100%;}
 
}
  </style>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		    <div class="icon">
		    	<img src="./img/12.JPG">
     			<h2>oteHUB</h2>
     		</div>
	      <a href="About.php">About Us</a>
	      <a href="venefits.php">View More</a>
	  <a href="sign.php" class="nav-links "><button  class="btn btn-info text-light">Sign Up &nbsp;<i class="fa-solid fa-circle-arrow-right"></i></button></a>
	</nav><!--nav-->

	<div id="page" class="col-12">
		<div id="containt" class="col-md-7">
			<h5 class=" border-top-5 text-danger">Democracy,&nbsp; National Security,&nbsp;Citizenship </h5>
			<h3 class="display-5 text-center p-2">Make your Voice Heared</h3>
			<h4 class="text-center p-1">With</h4>
			<h1 class="display-4 text-center py-2">Online Voting System</h1>
			<p class="  offset-1">An online voting system is a software platform that allows groups to securely conduct votes and elections. High-quality online voting systems balance ballot security, accessibility, and the overall requirements of an organization's voting event.</p>
			<p class=" offset-1">With ElectionBuddy's online voting system can helps you to organise your vote at your own device.It also can cast your vote to your preferable candiadte . Make your call at anytime anywhere with us.</p>
            <a href="sign.php"><button class="btn offset-1">Join</button></a>
		</div><!-- containt-->

		<div id="img" class="col-5">
			<img src="./img/page.JPG" class="img-fluid ">
		</div>

	</div> <!--page-->

  
</div>
</body>
</html>
<!--<div class="omg" role="navigation">
		<h3>Hello</h3>
	</div>

	