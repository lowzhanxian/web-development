<?php
    session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Join Membership</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/logotitle.png" type="image/logotitle.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>
             .membership {
                width: 50%;
            }
            
            #navbar{
                width: 100%;
                border: 1px solid black;
            }
            #booknav:hover{
                background-color: grey;
            }
            #membernav:hover{
                background-color: grey;
            }
            #bookreceiptnav:hover{
                background-color: grey;
            }
            #morenav:hover{
                background-color: grey;
            }
            #aboutusnav:hover{
                background-color: grey;
            }
            #contactusnav:hover{
                background-color: grey;
            }
            #logoutnav:hover{
                background-color: grey;
            }
            #loginnav:hover{
                background-color: grey;
            }
            
            #contactus{
                margin-top: 30px;
                width: 100%;
            }
            
            
            .card:hover{
                box-shadow:  0 2px 40px 0 white;
            }
            
            #join{background-color: #FFB6C1;
              border-radius: 5px;
              width:100px;
              padding: 10px;
              color:white;
              font-size: 15px;
              font-family: Helvetica;}
            #join:hover{
                background-color: white;
                color:blueviolet;
                
            }
            
                
            
            body{
                background-image: url('image/membership badminton.jpg');
                
            }
            
            
            .title-word {
                animation: color-animation 5s linear infinite;
            }

            .title-word-join {
              --color-1: blue;
              --color-2: purple;
              
            }

            .title-word-join {
              --color-1: blue;
              --color-2: purple;
              
            }
           
            @keyframes color-animation {
            10%   {color: var(--color-2)}
            20%   {color: var(--color-1)}
            40%   {color: var(--color-1)}
            60%   {color:var(--color-1 )}
            65%   {color: var(--color-2)}
            80%   {color: var(--color-1)}
            90%   {color: var(--color-2)}
            100%  {color: var(--color-2)}
          }
          @media screen and (max-width:400px){
        .pc{
            visibility: hidden;
            clear: both;
            float:left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }
        
    }
    @media screen and (min-width:400px) {
        .phoneView{
             visibility: hidden;
            clear: both;
            float:left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }
        
        
        
    }

            
        </style>
    
    
    
    </head>
    <body>
        <div class='pc'>
            <?php require ('header.php'); ?>

            <div class="container text-center">
                 <h2 class="membershipplan" style="font-size:40px;">
                    <span class="title-word title-word-join">JOIN</span>
                    <span class="title-word title-word-join">US</span>

                </h2>
            </div>
            <div class="con</body>tainer text-center " >
                 <h2 class="membershipplan" style="font-size:40px;">
                    <span class="title-word title-word-join">JOIN</span>
                    <span class="title-word title-word-join">US</span>

                </h2>
            </div>
            <div class="container text-center">
                 <h2 class="membershipplan" style="font-size:40px;">
                    <span class="title-word title-word-join">JOIN</span>
                    <span class="title-word title-word-join">US</span>

                </h2>
            </div>
            <div>
                <h1 style="font-size:30px;color: white;font-weight: bold;text-align: center;">
                    MEMBERSHIP PLAN
                </h1>
                <p style="font-size:15px;color:white;text-align: center;">
                    You are eligible to choose your plan to get more discount promotion via this page.
                </p>
            </div>

            <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <div class="card" >
                        <div class="card-header " style="background-color: #FFB6C1;padding: 5px;color:white;font-size: 30px;font-family: Helvetica;">
                          Basic
                        </div>
                        <ul class="list-group list-group-flush"   >
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">RM 18 per Hour</li>
                          
                          
                        </ul>
                    </div>
                  </div>
                  <?php
                    if(isset($_POST["join"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "badminton";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {
                        $userID = $_SESSION["userID"];
                        $premium = "Premium";
                        $newDate = date('Y-m-d', strtotime(' + 1 months'));
                            
                            
                            $sql = "UPDATE register_login SET memberType='$premium' , startDate = CURRENT_DATE(), endDate = '$newDate'  WHERE userID = $userID";

                            if (mysqli_query($conn, $sql)) {
                                echo "<script> alert('Welcome to the premium club!');window.location= \"membership.php\"; </script>";
                            }
                            else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        

                    }
                    mysqli_close($conn);
                    }

                    else{
                    ?>
          

                
                <form action="#" method="post" class="membership"> 
                  <div class="col" >
                    <div class="card"   >
                        <div class="card-header " style="background-color: #FFB6C1;padding: 5px;color:white;font-size: 30px;font-family: Helvetica;">
                            Premium 
                        </div>
                        <ul class="list-group list-group-flush"   >
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">RM 15 per Hour</li>
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">30 Days Renew</li>
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none"><b style="color:red;">JOIN NOW FOR ONLY RM15</b></li>
                          <li class="list-group-item" style="padding: 15px;background-color:black;" ><button type="submit" name="join" id='join' style="text-decoration:none;color: black;">JOIN</button></li>
                        </ul>
                    </div>
                  </div>
                 </form>        
                  <?php
                        }
                  ?>
                </div>
            </div>
    </div>
        <div class="phoneView">
            <nav id="navbar" class="navbar  px-3 mb-3 bg-dark" >
                <a class="navbar-brand" href="homepage.php#abtus" style="color:white;"><img src="image/logotitle.png" height="100px" alt="logo"/>CLT SPORT CENTRE</a>
              <ul class="nav nav-pills">

                <li class="nav-item" id="booknav">
                    <a class="nav-link" href="book.php" style="color:white;">BOOK NOW</a>
                </li>  

                <li class="nav-item" id="membernav">
                  <a class="nav-link" href="membership.php" style="color:white;">JOIN MEMBERSHIP</a>
                </li>
                <li class="nav-item" id="bookreceiptnav">
                  <a class="nav-link" href="History.php" style="color:white;">MYBOOKING</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" id="morenav" style="color:white;"  >MORE</a>
                  <ul class="dropdown-menu bg-dark">
                      <li><a class="dropdown-item" href="aboutus.php" id="aboutusnav" style="color:white;">About Us</a></li>
                      <li><a class="dropdown-item" href="contactus.php#" id="contactusnav" style="color:white;">Contact Us</a></li>
                      <li><a class="dropdown-item" href="profile.php#" id="contactusnav" style="color:white;">PROFILE</a></li>

                      <li><a class="dropdown-item" href="logout.php" id="logoutnav" style="color:white;">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
    
        <div class="container text-center">
             <h2 class="membershipplan" style="font-size:40px;">
                <span class="title-word title-word-join">JOIN</span>
                <span class="title-word title-word-join">US</span>
                
            </h2>
        </div>
        <div class="container text-center " >
             <h2 class="membershipplan" style="font-size:40px;">
                <span class="title-word title-word-join">JOIN</span>
                <span class="title-word title-word-join">US</span>
                
            </h2>
        </div>
        <div class="container text-center">
             <h2 class="membershipplan" style="font-size:40px;">
                <span class="title-word title-word-join">JOIN</span>
                <span class="title-word title-word-join">US</span>
                
            </h2>
        </div>
        <div>
            <h1 style="font-size:30px;color: white;font-weight: bold;text-align: center;">
                MEMBERSHIP PLAN
            </h1>
            <p style="font-size:15px;color:white;text-align: center;">
                You are eligible to choose your plan to get more discount promotion via this page.
            </p>
        </div>
        
        <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <div class="card"  >
                        <div class="card-header " style="background-color: #FFB6C1;padding: 5px;color:white;font-size: 30px;font-family: Helvetica;">
                          Basic
                        </div>
                        <ul class="list-group list-group-flush"   >
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">RM 18 per Hour</li>
                          
                          
                        </ul>
                    </div>
                  </div>
                  <?php
                    if(isset($_POST["join"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "badminton";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {
                        $userID = $_SESSION["userID"];
                        $premium = "Premium";
                        $newDate = date('Y-m-d', strtotime(' + 1 months'));
                            
                            
                            $sql = "UPDATE register_login SET memberType='$premium' , startDate = CURRENT_DATE(), endDate = '$newDate'  WHERE userID = $userID";

                            if (mysqli_query($conn, $sql)) {
                                echo "<script> alert('Welcome to the premium club!');window.location= \"membership.php\"; </script>";
                            }
                            else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        

                    }
                    mysqli_close($conn);
                    }

                    else{
                    ?>
                    <form action="#" method="post"> 
                  <div class="col" >
                    <div class="card"  >
                        <div class="card-header " style="background-color: #FFB6C1;padding: 5px;color:white;font-size: 30px;font-family: Helvetica;">
                            Premium 
                        </div>
                        <ul class="list-group list-group-flush"   >
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">RM 15 per Hour</li>
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none">30 Days Renew</li>
                          <li class="list-group-item" style="padding: 15px;background-color:white;color:black;border: none"><b style="color:red;">JOIN NOW FOR ONLY RM15</b></li>
                          <li class="list-group-item" style="padding: 15px;background-color:black;" ><button type="submit" name="join" id='join' style="text-decoration:none;color: black;">JOIN</button></li>
                        </ul>
                    </div>
                  </div>
                 </form>        
                  <?php
                        }
                  ?>
        </div>
        
        
        
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   <footer class="py-4 bg-dark " id="contactus">
    <div class="container">
        <div class="row" >
          <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
               <span class="btn-label" ><a href="contactus.php"><i class="fa fa-envelope"id="email"></i></a></span></button>
          </div>
          <div class="col-sm text-center text-white">
            <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
                 <span class="btn-label"><a href="contactus.php"><i class="fa fa-phone"></i></a></span></button>
            </div>
          </div>
          <div class="col-sm text-center text-white">
            <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
               <span class="btn-label"><a href="contactus.php"><i class="fa fa-map-marker"></i></a></span></button>
            </div>
          </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;margin-bottom: 40px;">
        <p class="m-0 text-center text-white">Copyright &copy; CLT SPORT CENTRE 2022</p>
    </div>
</footer>



</html>
