<?php
    session_start(); 
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Profile Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/logotitle.png" type="image/logotitle.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>
            #navbar{
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
    .carousel-inner{
        width:70%;
        height:60%;
        margin-left: auto;
        margin-right: auto;
    }
    #book1:hover{
        background-color: grey;
        border: none;
    }
    
    #contactus{margin-top: 20px;}
    body{background-color: black;}
    
    



    
    @media screen and (max-width:400px){
        .laptop-View{
            visibility: hidden;
            clear: both;
            float:left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }
    }
    @media screen and (min-width:400px) {
        .phone-View{
            visibility: hidden;
            clear: both;
            float:left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;}
    } 
    
    
    

        
    </style>
    </head>
    
<body >
        <?php require ('header.php'); ?>
        
    <div class="laptop-View">
        <div class="card" style="width: 30%;border: none;margin-left:550px;border-radius: 30px;background-color: skyblue;">
            <img class="profile-img-top" style="border-top-left-radius:30px;border-top-right-radius: 30px;" src="image/aq.jpg" alt="Card image cap">
            <ul class="list-group list-group-flush" >
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Username: <?php  echo  $_SESSION['userName'] ; ?></li>
                <li class="list-group-item"  style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Email: <?php  echo   $_SESSION['userEmail'] ; ?></li>
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Contact: <?php  echo  $_SESSION['userContact']  ; ?></li>
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Membership Plan: <?php  echo   $_SESSION['memberType']  ; ?></li>
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Plan End Date: <?php  echo  $_SESSION['endDate']  ; ?></li>
                <div style="width:30%;background-color: skyblue;height: 30px;border-bottom-left-radius: 30px;"/>
                    
                
                    
            </ul>
              
            </div>
            
            
        </div>
                
           
            
        
    </div>
    <div  class="phone-View">
        <div class="card" style="width: 100%;border: none;margin-left:0px;border-radius: 30px;background-color: skyblue;">
             <img class="profile-img-top" style="border-top-left-radius:30px;border-top-right-radius: 30px;" src="image/aq.jpg" alt="Card image cap">
            <ul class="list-group list-group-flush" >
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Username: <?php  echo  $_SESSION['userName'] ; ?></li>
                <li class="list-group-item" style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Email: <?php  echo   $_SESSION['userEmail'] ; ?></li>
                <li class="list-group-item"style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Contact: <?php  echo  $_SESSION['userContact']  ; ?></li>
                <li class="list-group-item"style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Membership Plan: <?php  echo   $_SESSION['memberType']  ; ?></li>
                <li class="list-group-item"style="border:none;background-color: skyblue;text-align: center;color:white;font-size: 15px;">Plan End Date: <?php  echo  $_SESSION['endDate']  ; ?></li>
                <div style="width:30%;background-color: skyblue;height: 30px;border-bottom-left-radius: 30px;"/>
                    
                
                    
            </ul>
              
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    
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

