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
        <title>History Page</title>
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
    
    #contactus{margin-top: 400px;}
    body{background-color: black;}
    
    
    
    @media screen and (max-width:400px){
        .laptop{
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
<body >
        
     <?php require ('header.php'); ?>
    <div class="laptop">
        <div id="titlename" style="margin-top:-20px;height: 420px;">
            <h1 style="color: white;font-size: 35px;text-align: center;background-image: url('image/badminton.png')">
                History
            </h1>
            <table class="table-bordered" style="width:100%;background-color: white;margin-top: -10px;text-align: center;border:1px solid black;" >
                
                
                <?php
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "badminton";
                    $con = mysqli_connect($servername, $username, $password, $dbname);
                    $userID = $_SESSION["userID"];
                    
                    $res = mysqli_query($con,"Select * from booking WHERE userId=$userID");
                    $queryResult = mysqli_num_rows($res);
                    

                    if($queryResult > 0){
                        
                    ?>
                    <tr>
                    <th >Transaction Date</th>
                    <th>Reservation Date</th>
                    <th>Court</th>
                    <th>Time</th>
                    </tr>
                    <?php
                        
                    while($row =mysqli_fetch_array($res)){
                            
                    ?>
                <tr>
                  <td><?php echo $row['transactionDate']?></td>
                  <td><?php echo $row['reserveDate']?></td>
                  <td><?php echo $row['courtNumber']?></td>
                  <td><?php echo $row['Time']?></td>
                </tr>
                
                <?php
                		}
                    }
                    else{
                        echo '<p style="color: white; font-size: 38px; font-weight: 700; text-align:center;">No results found!</p>';
                        
                    }

                ?>
              </table>
        </div>
    </div>
    <div class='phone'>
        <div id="titlename" style="margin-top:-20px;height: 420px;">
            <h1 style="color: white;font-size: 35px;text-align: center;background-image: url('image/badminton.png')">
                History
            </h1>
            <table class="table-bordered" style="width:100%;background-color: white;margin-top: -10px;text-align: center;border:1px solid black;" >
                <?php
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "badminton";
                    $con = mysqli_connect($servername, $username, $password, $dbname);
                    $userID = $_SESSION["userID"];
                    
                    $res = mysqli_query($con,"Select * from booking WHERE userId=$userID");
                    $queryResult = mysqli_num_rows($res);
                    

                    if($queryResult > 0){
                        
                    ?>
                    <tr>
                    <th >Transaction Date</th>
                    <th>Reservation Date</th>
                    <th>Court</th>
                    <th>Time</th>
                    </tr>
                    <?php
                        
                    while($row =mysqli_fetch_array($res)){
                            
                    ?>
                <tr>
                  <td><?php echo $row['transactionDate']?></td>
                  <td><?php echo $row['reserveDate']?></td>
                  <td><?php echo $row['courtNumber']?></td>
                  <td><?php echo $row['Time']?></td>
                </tr>
                
                <?php
                		}
                    }
                    else{
                        echo '<p style="color: white; font-size: 38px; font-weight: 700; text-align:center;">No results found!</p>';
                        
                    }

                ?>
              </table>
        </div>
    </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<footer class="py-4 bg-dark" id="contactus">
    <div class="container">
        <div class="row" >
          <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
               <span class="btn-label" ><a href="contactus.php"><i class="fa fa-envelope"id="email"></i></a></span></button>
          </div>
          <div class="col-sm text-center text-white">
            <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
               <span class="btn-label"><i class="fa fa-phone"></i></span></button>
            </div>
          </div>
          <div class="col-sm text-center text-white">
            <div class="col-sm text-center text-white">
             <button type="button" class="btn btn-labeled btn-success" style='width:50px ;height: 50px'>
               <span class="btn-label"><i class="fa fa-map-marker"></i></span></button>
            </div>
          </div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;margin-bottom: 40px;">
        <p class="m-0 text-center text-white">Copyright &copy; CLT SPORT CENTRE 2022</p>
    </div>
</footer>
    
    
</html>
