<!DOCTYPE html>
<html>
<head>
	<title>Dashboard of Admin Pannel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta name="viweport" content="width=device-width,initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="IE-edge">
  <style >
i{cursor: pointer;}
  #whole{
    display: grid;
    grid-template-columns: 1.3fr 4.8fr 1.4fr ;
    grid-gap: 2px;
  }

    .icon{
  display: flex;
  width: 20%;
  font-style: italic;
  border-left: 7px solid black;
  padding: 6px;
}
.icon img{
  width: 17%;
}
.icon h2{
  font-weight: bold; color: coral;
}
#side{
  display: block;
  box-shadow: 8px lightgray;
  background-color: #000080;
  color: #fff;
}
#side .items{
  display: flex;
  width: 90%;
  margin-top: 15px;
    align-items: center;
    padding: 5px;
    transition: 0.2s ease-in-out;
}
#side .items:hover{
     background-color: lightgray;
     border-left: 9px solid gray;
     border-radius: 10px;
     transform: scale(1.1);
}
#side  i{margin: 3% 9% 5% 2%; color: #fff; cursor: pointer;}
#side :hover{color: #000;}
#corner{display: flex; justify-content: space-between; width: 14%; font-size: 28px;  width: 30%; position: relative;}
#corner input{width: 80%; font-size: 20px;}
#corner i{position: absolute;right: 23%; top: 9%;}
#corner img{border-radius: 50%; width: 15%;}
#bars{display: flex; justify-content: space-between;}
#bars div{
   color: #fff; border-radius: 20px;box-shadow: 5px 6px 7px gray; width: 30%; display: flex;transition: 0.7s ease;
}
#bars div:hover{transform: scale(1.1);}
#bottom{display: flex;box-shadow: 5px 6px 7px gray;border-radius: 20px; }
#bottom img{width: 70%;}
.div{ box-shadow: 5px 6px 7px gray;display: flex;border-radius: 20px;margin-top: 40px; }

@media only screen and (max-width: 890px) {
  #bars {
    flex-direction: column;
  }
}
  </style>
  </head>
<body>
  <nav class="navbar bg-light ">
    <div class="icon nav-item">
          <img src="./img/12.JPG">
          <h2 >oteHUB</h2>
          <i class=" fa-solid fa-bars nav-item ml-4"></i>
        </div>
      <h3 class="nav-item"><b>Dashboard</b></h3>
      <div class="nav-item " id="corner">
         <input type="" name="" placeholder="search" class="form-control" /><i class="fa-solid fa-magnifying-glass"></i>

         <img src="./img/99.jpg" class="img-fluid">
         </div>
  </nav>
 <div id="whole"> 

    <div id="side" class="col-12">
    
      <div class="items"><i class="fa-solid fa-house"></i>Home </div>
      <div class="items"><i class="fa-solid fa-user"></i>Profile</div> 
      <div class="items"><i class="fa-solid fa-list"></i>Lists </div>
        
      <div class="items"><i class="fa-regular fa-comment"></i>Chats</div> 
      <div class="items"><i class="fa-brands fa-wpforms"></i>Forms</div>
    
      <div class="items"><i class="fa-solid fa-dice-d6"></i>Components</div>
      <div class="items"><i class="fa-solid fa-paper-plane"></i>Contacts</div>
      <div class="items"><i class="fa-solid fa-circle-info"></i>About</div>
      <div class="items"></div><br>

    </div><!-- end of side bar -->
  <div id="middle" class="m-3">
    <div id="bars">
      <div class=" p-2 bg-danger">
        <i class="fa-regular fa-rectangle-list m-3 display-4"></i>
        <p class="ml-3 p-2 mt-2"><b>New listed </b> <br> 1034 <br></p>
      </div>

      <div class="  p-2 bg-info">
        <i class="fa-solid fa-users m-2 display-4"></i>
        <p class="ml-3 p-2 mt-2"><b>Visitors </b> <br> 164 <br></p>
      </div>

      <div class="  p-2 bg-success">
       <i class="fa-solid fa-user m-3 display-4"></i>
       <p class="ml-3 p-2 mt-2"><b>Voters </b> <br> 1034 <br></p>
       
      </div>
    </div>

    <div id="bottom" class="mt-4 p-2">
      <h3><ins>Growth</ins></h3>
      <img src="./img/report.PNG" class="img-fluid">
      <ul class="col-4 p-4 mt-5">
       <li>Incresing User</li>
       <li class="mt-2">Voter List </li>
       <li class="mt-2">Growing visitors</li>
       <li class="mt-2">Awarness </li>
       <li class="mt-2">Digital Interaction</li>
       </ul>
    </div>
  </div>  
  
  <div id="right">
    <h3>New Updates </h3>
    <div class="div">
      <i class="fa fa-bell mt-4" aria-hidden="true"></i>
      <p class="ml-3">new election<br> result<br>visitors</p>
    </div>    

    <div class="div">
      <i class="fa fa-bell mt-4" aria-hidden="true"></i>
      <p class="ml-3">Your vote has been count as fresh voter  </p>
    </div> 

    <div class="div">
      <i class="fa fa-bell mt-4" aria-hidden="true"></i>
      <p class="ml-3">Result has comes out for Election : 2 </p>
    </div> 

    <div class="div">
      <i class="fa fa-bell mt-4" aria-hidden="true"></i>
      <p class="ml-3">New  election has been active from 2 days ago </p>
    </div>       
  </div>
</div>

</body>
</html>