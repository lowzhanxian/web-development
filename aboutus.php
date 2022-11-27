<?php
    session_start(); 
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.php to edit this template
-->
<html>
    <head>
        <title>About Us </title>
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
    td {
        padding: 20px;
    }
    
    
    .title-span h1{
        color: black;
        font-weight: bold;
    }
    aboutus-area {
    padding-top:120px;
     padding-bottom:120px;
    }
    #column1{
        width: 50%;
    }
    
    


    
    .aboutus-content h1 {
        margin-left: 40%;
      font-size: 40px;
      font-weight: 800;
      line-height: 40px;
      margin-bottom: 2px;
    color: white;}
     .aboutus-content h1 span {
     color: skyblue; }



    .aboutus-content p {
        margin-top: 40px;
        margin-left: 40%;
        font-size: 12px;
        line-height: 26px;
        color: white;
    }

     /*-- counter --*/
    .counter {
      border: 1px solid skyblue;
      margin-top: 32px;
      float: left;
      margin-left: 20%;
      width: 100%; }
      .counter .single-counter {
        margin-left: 6%;
        float: left;
        width: 15%;
        color: white;
      }
      #contactus{
          margin-top: 20px;
      }
      body{
          background-color: black;
      }
      @media screen and (max-width:400px){
        .deks{
            visibility: hidden;
            clear: both;
            float:left;
            margin: 10px auto 5px 20px;
            width: 28%;
            display: none;
        }
        
    }
    @media screen and (min-width:400px) {
        .phone{
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
  <?php require ('header.php'); ?>
    <div class="deks">
        <div id="titlename" style="margin-top:-20px;">
            <h1 style="color: white;font-size: 35px;text-align: center;background-image: url('image/badminton.png')">
                About Us
            </h1>
        </div>
        <div id="mm" class="carousel carousel " class="carousel carousel-dark slide" data-bs-ride="carousel"style="margin-top:20px;" >
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner" style="margin-top:-20px; height: 800px;">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/court1.jpg" class="d-block w-100" alt="court1">
                    
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/court2.jpg" class="d-block w-100" alt="court2">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="image/badminton.png" class="d-block w-100" alt="court3">
                     
                  </div>
                  <div class="carousel-item">
                    <img src="image/court5.jpg" class="d-block w-100" alt="court4">
                     
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mm" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:yellow;"></span>
                  <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mm" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color:yellow;" ></span>
                  <span class="visually-hidden"></span>
                </button>
        </div>
        <div class="aboutus-area">
            <div class="container">
                <div class="row ">
                    
                    
                    <div class="col-md-9 col-sm-6 text-center">
                        <div class="aboutus-content ">
                            <h1>About Us<span> CLT SPORTCENTRE</span></h1>
                            
                            <p>CLT sport centre is located at the kedah state which have founded since 5 May 2022.In the Sport Cente ,there have available with 10 courts ,toilets, 1 cafe and 10 airconds for the customer in the indoor courtr badminton.Our premises are relatively huge and easy to locate. In addition to that, our centres have ample parking spaces which are well lighted and guarded with security surveillances to ensure customers' safety at our centers at all times.Customers' high quality satisfactions has become an important aspect in our centre as we only use teraflex floor for all our court flooring. Besides, our lighting system is also specifically designed to ensure sufficient brightness to ensure the best playing environment.. After shower, customers could also proceed to our adjourned cafeteria / waiting area to grab some light food / snacks while catching up with their friends or family members.We are also providing the subscription for the customer to join to get more benefits and convenience.</p>

                            <div class="counter ">

                                <div class="single-counter text-center">
                                    <h2 class="counter">10</h2>
                                    <p>Court Available</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">2</h2>
                                    <p>Toilet</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">1</h2>
                                    <p>Cafe</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">10</h2>
                                    <p>Airconds</p>
                                </div>

                            </div>

                        </div>
                    </div>    
                    </div>
                </div>
            </div>
    </div>  
    <div class="phone">
            <div id="titlename" style="margin-top:-20px;">
            <h1 style="color: white;font-size: 35px;text-align: center;background-image: url('image/badminton.png')">
                About Us
            </h1>
        </div>
        <div id="mm" class="carousel carousel " class="carousel carousel-dark slide" data-bs-ride="carousel"style="margin-top:-10px;" >
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner" >
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/court1.jpg" class="d-block w-100" alt="court1">
                    
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="image/court2.jpg" class="d-block w-100" alt="court2">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="image/badminton.png" class="d-block w-100" alt="court3">
                     
                  </div>
                  <div class="carousel-item">
                    <img src="image/court5.jpg" class="d-block w-100" alt="court4">
                     
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mm" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="visibility:hidden;"></span>
                  <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mm" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"  style="visibility:hidden;" ></span>
                  <span class="visually-hidden"></span>
                </button>
        </div>
        <div class="aboutus-area">
            <div class="container">
                <div class="row ">
                    
                    
                    <div class="col-md-9 col-sm-6 text-center">
                        <div class="aboutus-content ">
                            <h1 style="margin-left:-5px ;text-align:center;font-size:25px;">About Us<span> CLT SPORTCENTRE</span></h1>
                            
                            <p style="text-align:center;margin-left:-10px;">CLT sport centre is located at the kedah state which have founded since 5 May 2022.In the Sport Cente ,there have available with 10 courts ,toilets, 1 cafe and 10 airconds for the customer in the indoor courtr badminton.Our premises are relatively huge and easy to locate. In addition to that, our centres have ample parking spaces which are well lighted and guarded with security surveillances to ensure customers' safety at our centers at all times.Customers' high quality satisfactions has become an important aspect in our centre as we only use teraflex floor for all our court flooring. Besides, our lighting system is also specifically designed to ensure sufficient brightness to ensure the best playing environment.. After shower, customers could also proceed to our adjourned cafeteria / waiting area to grab some light food / snacks while catching up with their friends or family members.We are also providing the subscription for the customer to join to get more benefits and convenience.</p>

                            <div class="counter " style="margin-left:-0px;" >

                                <div class="single-counter text-center">
                                    <h2 class="counter">10</h2>
                                    <p>Court Available</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">2</h2>
                                    <p>Toilet</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">1</h2>
                                    <p>Cafe</p>
                                </div>

                                <div class="single-counter text-center">
                                    <h2 class="counter">10</h2>
                                    <p>Airconds</p>
                                </div>

                            </div>

                        </div>
                    </div>    
                    </div>
                </div>
            </div>
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
