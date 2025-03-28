<!DOCTYPE html>
<html>
<head>
	<title>First Page </title>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
   <style >
   	*{margin: 4px;padding: 4px;}
 nav{
	padding-bottom: 5px;
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
.icon{
	display: flex;
	width: 28%;
	font-style: italic;
	border-left: 7px solid black;
	padding: 10px;
}
.icon img{
	width: 17%;
}
.icon h2{
	font-weight: bold;
}
#containt{
	width: 50%;
	font-family: "Times New Roman";
	padding: 5%;
	background-color: #fff;
}
#containt h5{
	border-top:5px solid red;
	width: 60%;
}
#containt h1{font-weight: bold;}
#containt button{width: 15%;font-size: 20px;}
#img{
	width: 50%;
}
#img img{
	width: 100%;
	height: auto;
}
  	.i1,.i2,.i3{
	width: 100%;
	height: auto;
	border-radius: 10px 0px 10px 0px;
	background:linear-gradient( #E6E6FA ,#FFF 50% );
}
#topic{
	margin-top: 10px;
	width: 100%;padding: 10px;
	font-size: 18px;
	display: flex;
	flex-wrap: wrap;
	justify-content: center ;
	justify-content: space-between;
}
#t1, #t2, #t3{
	width: 30%;
	height: auto;
	padding: 10px;
	align-items: center;
	border:3px solid lightgray;
	border-radius: 15px;
	box-shadow: 5px 5px 5px gray;
}
#last{
	width: 100%;
	height: auto;
	padding: 5%;
	color: #fff;
	background-image:url("./img/88.JPG");
	background-size: cover;
	position: bottom;
}
#last button{
	width: 30%;
	padding: 10px;
	color: #fff;
	border:none;
	border-radius: 0px 10px 0px 0px;
	font-size: 23px;
	float: right;
}
#page{
	display: flex;
}
#ul{ border-bottom: 4px solid lightgray; }
footer{
	width: 100%;
}
</style>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		    <div class="icon">
		    	<img src="./img/12.JPG">
     			<h2 >oteHUB</h2>
     		</div>
	      <a href="login.php">Elections</a>
	      <a href="candi.php">Candidates</a>
	      <a href="result.php">Results</a>
	       <a href="help.html">Help</a>
	      <a href="login.php"><button class="btn btn-info text-light p-2 m-2">Login </button></a>
	</nav><!--nav-->

	<div id="page">
		<div id="containt" class="col-md-7">
			<h5 class="display-8 border-top-5 text-danger">Democracy,&nbsp; National Security,&nbsp;Citizenship </h5>
			<h3 class="display-5 text-center p-2">Make your Voice Heared</h3>
			<h4 class="text-center p-1">With</h4>
			<h1 class="display-4 text-center py-2">Online Voting System</h1>
			<p class=" col-md- offset-1">An online voting system is a software platform that allows groups to securely conduct votes and elections. High-quality online voting systems balance ballot security, accessibility, and the overall requirements of an organization's voting event.</p>
			<p class="col-md- offset-1">With ElectionBuddy's online voting system can helps you to organise your vote at your own device.It also can cast your vote to your preferable candiadte . Make your call at anytime anywhere with us.</p>
		</div><!-- containt-->

		<div id="img">
			<img src="./img/page.JPG" class="img-fluid ">
		</div>

	</div> <!--page-->
   <div id="whole" >
		<h3 class="text-left display-3 text-center bg-dark text-light"> <b>Info About System</b></h3>		
	<div id="info" class="text-center" >
		<div class="i1">
         <h2 class="text-center display-4 text-danger">What is eVoting?</h2>
          <p class="p-4 col-md-11 ">eVote is an election system that facilitates voters to record their secure and secret ballot electronically. It has a friendly user interface and enables voters to cast their votes in few simple steps. We ensures the authenticity of the voters and the votes cast by them along with non-traceability of the casted vote. eVote's robust architecture has persistently manifested to be one of the most reliable, comprehensible and economical electronic voting solution.</p>
         </div>
         <div class="i2">
         <h2 class="text-center text-primary display-5">Online Voting and Ballot Methods</h2>
         <p class="p-4 col-md-11">Online voting can generally be conducted in two ways — remote online voting and on-site online voting. Your internet voting depends on the options stipulated by your bylaws. Your bylaws are always the first place to check when deciding if you need to run an on-site or remote online vote. In some cases, you may even be allowed to utilize both options!</p>
         </div>
         <div class="i4">
         	<img src="./img/123.JPG" class="img-fluid">
         </div>
         <div class="i3 ">
         <h2 class="text-success display-5">Holding an Online Election</h2>
         <p>As we've discussed, there are several benefits to holding an online election. You can hold an online election for your organization using internet voting systems, such as ElectionBuddy. To host an election using ElectionBuddy, simply sign up for an account, enter your information, and select the type of vote or poll you would like to use for your election, and then send out voting credentials to each one of your voters.</p>
         </div>
    </div><!-- infoo-->
   </div><!-- whole-->

   <div id="topic">
   	    <div id="t1">
   	    	<h3 class="text-center text-light p-2" style="background-color: coral">Why Online VOTING</h3>
   	    	<p class="text-center p-3">Online voting offers convenience, accessibility for diverse populations, potential cost savings, and enhanced efficiency. It can streamline the voting process, increase voter turnout, and improve accessibility for voters who face barriers with traditional polling stations.</p>
   	    </div>

   	    <div id="t2">
   	    	<h3 class="text-center bg-light text-primary p-2"> Secure Your Voice </h3>
   	    	<p class="text-center p-3">Blockchain ensures online voting safety by storing encrypted votes across a decentralized network. It prevents tampering and ensures transparency through immutable records. Each vote is cryptographically secured, anonymized, and auditable, enhancing trust in the integrity of election results without relying on a central authority.</p>
   	    </div>

   	    <div id="t3">
   	    	<h3 class="text-center bg-success text-light p-2"> Awarness</h3>
   	    	<p class="text-center p-3">Online voting systems can spread awareness by offering accessible information about voting procedures, candidates, and issues through digital platforms. They engage a broader audience, including younger voters and those in remote areas, fostering civic participation and increasing awareness about democratic processes and responsibilities.</p>
   	    </div>
   </div>

       <div id="screen">
          <img src="./img/vote2.JPG" class="img-fluid img-center">
       </div>

       <div id="last">
       	   <h1>Start making your first choice</h1>
       	   <h4>VoteHUB is the most trusted software to select your expensive vote . Can't believre US?</h4>
       	   <a href="Login.php"><button  class="btn btn-success">Make your First Choice &nbsp;<i class="fa-solid fa-circle-right"></i></button></a>
       	   <h4>See yourself..</h4>
       </div>

	<div id="footer" class="bg-dark">
		<h3 class="text-center py-4">View all Features & Capabilities</h3>
		<a href="venefits.php"><button class="btn-primary bg-light text-info py-2 display-3 ">Learn More</button></a>
		<div id="ul">
		     <ul class="list">About
			    <li class="list-items"><a href=""></a>Contact</li>
				<li class="list-items"><a href=""></a>Reviews</li>
				<li class="list-items"><a href=""></a>Notification</li>
				<li class="list-items"><a href=""></a>Voters</li>
		     </ul>

			<ul class="list">Features
				<li class="list-items"><a href=""></a>Resources</li>
				<li class="list-items"><a href=""></a>Experts</li>
				<li class="list-items"><a href=""></a>Team</li>
				<li class="list-items"><a href=""></a>Mnagment</li>
			</ul>

			<ul class="list">Industries
				<li class="list-items"><a href=""></a>Associates</li>
				<li class="list-items"><a href=""></a>Political Laws</li>
				<li class="list-items"><a href=""></a>Service</li>
				<li class="list-items"><a href=""></a>Organizations</li>
			</ul>

			<ul class="list">My Account
				<li class="list-items"><a href=""></a>Login</li>
				<li class="list-items"><a href=""></a>Ballot</li>
				<li class="list-items"><a href=""></a>Elections</li>
			</ul>
	   </div>
	
	<footer class="text-center bg-dark text-light">
		<h3 class="display-4">VoteHUB</h3>
		<a href="#"><i class="fa-brands fa-google"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;
       <a href="#"><i class="fa-brands fa-facebook"></i></a>&nbsp; &nbsp;&nbsp; &nbsp;
       <a href="#"><i class="fa-brands fa-square-twitter"></i></a>&nbsp;&nbsp; 
       <a href="#"><i class="fa-brands fa-linkedin"></i></a>
		<p class="">Terms of Use &nbsp; &nbsp;&nbsp; &nbsp;Privacy Policy &nbsp; &nbsp;&nbsp; &nbsp;Security 
		&nbsp; &nbsp;&nbsp; &nbsp; Data Proccessing</p>
		<p>&copy 2024 VoteHUB is a registered trademark of Votenet solution with evoting System.</p>
	</footer>
</div>
</body>
</html>