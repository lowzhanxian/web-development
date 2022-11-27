<?php
    session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>BOOKING </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
    #book1:hover{
        background-color: grey;
        border: none;
    }
    
    
    body{
        background-color: black;
    }
    
    #court{
       list-style-type: none;
       margin: 0px;
       padding: 0px;
       overflow: hidden;
       background-color:grey; 
       margin-top: 20px;
       
    }
    
    #court li {
      float: left;
      width: 150px;
    }
    
    #court li a{
        display: block;
        text-align: center;
        padding: 10px;
        text-decoration: none;
        color:white;
    }
     
    #court li a:hover{
        background-color: black;
        color: white;
        border-radius: 5px;
    }
    
    #cancelbook{
        display:inline-block;
        padding: 10px;
        margin-left: 30px;
    }
    #contactus{
        margin-top: 30px;
    }
    #video{width: 100%;
    margin-top: -20px;}
    #bookrules{
        color: white;
        text-align: center;
        font-size: 40px;
    }
    #formcourt1{margin-left: 250px;
    border-radius: 20px;background-color: #FFB6C1;
    }
    
    #transac{width:500px;
            
             margin-left: 250px;
             border-radius: 20px;
             
             }
    #reserve{width:500px;
            
             margin-left: 250px;
             border-radius: 20px;
                 
             }
    #po{width: 500px;
        margin-left: 250px;
             border-radius: 20px;
    }
    #oop{
        width: 500px;
        margin-left: 250px;
        border-radius: 20px;
    }
    #uande{
        width: 500px;
        
        margin-left: 250px;
        border-radius: 20px;
        ; 
        
    }
    @media only screen and (max-width: 400px) {
        #navbar{
            width: 100%;
        }
        
        
        #bookrules{
            font-size: 20px;
            text-align: center;
        }
        #video{width: 100%;}
        #formcourt1{margin-left: 0px;
    width: 100%;border-radius: 20px;background-color: #FFB6C1;
    }
    
    #transac{width: 390px;
          
             margin-left: 0px;
             border-radius: 20px;
             
             }
    #reserve{width: 390px;
            
             margin-left: 0px;
             border-radius: 20px;
                 
             }
    #po{width: 500px;
        margin-left: 0px;
             border-radius: 20px;
    }
    #oop{
        width: 500px;
        margin-left: 0px;
        border-radius: 20px;
    }
    #uande{
        width: 500px;
        
        margin-left: 0px;
        border-radius: 20px;
        ; 
    }
    #contactus{
        width: 100%;
    }
    

</style>

</head>
    <body>
<?php require ('header.php'); ?>
  
    <div id="dekstop-book">
        <div class="bookpage">
            
            
            <video id="video" autoplay muted loop id="myVideo"  >
                <source src="image/badmintonvideo.mp4" type="video/mp4">
            </video>
            
        
        </div>
        
        
        <div id="formcourt1"class="col-lg-8  ">
            
          <?php
                if(isset($_POST["book"])){
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
                    
                    else{
                            $courtDate = $_POST['court_date'];
                            $court = $_POST['court'];
                            $time = $_POST['time'];
                            $userName = $_POST['username'];
                            $email = $_POST['email'];
                            $userID = $_SESSION["userID"];
                            $username = $_SESSION["userName"];
                                
                            $result = mysqli_query($conn, "SELECT * FROM booking ");
                            
                            while($row = mysqli_fetch_assoc($result)){
                                    $checkCourt = $row['courtNumber'];
                                    $reserveDate = $row['reserveDate'];
                                    $reserveTime = $row['Time'];
                            }
                            if($court == $checkCourt && $courtDate == $reserveDate && $time == $reserveTime){
                                echo "<script> alert('Court Already Booked!');window.history.back();; </script>";    
                            }
                            else {   
                                $sql = "INSERT INTO booking (userId, username, courtNumber, transactionDate, reserveDate, Time) VALUES ('$userID', '$username' ,'$court', CURDATE(), '$courtDate', '$time' )";

                                if (mysqli_query($conn, $sql)) {
                                    echo "<script> alert('Court Booked!');window.location.replace('homepage.php'); </script>";
                                }
                                else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            }
                           
                    }
                            mysqli_close($conn);
                }

                
                else {
               
            ?>
              
            
            
            <form action="" method="post">
                <h1 id="courbook" style='font-size:30px;text-align: center;color: white;padding-top: 10px;'>Court Booking</h1>
                <h1 id="transaction"style='font-size:30px;text-align: center;color: white;padding-top: 10px;'>Transaction Date</h1>
                <div id="transac" class="form-group col-lg-8  " style="color:white;font-size: 20px;text-align: center;background-color:black " >
                <?php 
                  echo  date("Y-m-d"). "<br>";
                  
                  echo  date("l");  
                ?>
                </div>
                <h1 id="transaction"style='font-size:25px;text-align: center;color: white;'>Reservation Date</h1>
                <div class="form-group col-lg-8  " id="reserve">
                <input type="date" class='form-control' id="date_reservation"  name="court_date" required>
                </div>
                <div id="op" class="row" style="margin-top: -10px;">
                    <div id="po"class="form-group col-lg-8  " >    
                        <div class="form-floating" style="margin-top:20px;">
                            <select name="court" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected value="1">C1</option>
                              <option value="2">C2</option>
                              <option value="3">C3</option>
                              <option value="4">C4</option>
                              <option value="5">C5</option>
                              <option value="6">C6</option>
                              <option value="7">C7</option>
                              <option value="8">C8</option>
                              <option value="9">C9</option>
                              <option value="10">C10</option>
                            </select>
                            <label for="floatingSelect">Choose Court:</label>
                        </div>
                    </div>
                    <div id="oop"class="form-group col-lg-6  " >    
                        <div class="form-floating" >
                            <select name="time" class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
                              <option selected value="1000-1200">10AM-12PM</option>
                              <option value="1200-1400">12PM-2PM</option>
                              <option value="1400-1600">2PM-4PM</option>
                              <option value="1600-1800">4PM-6PM</option>
                              <option value="1900-2000">6PM-8PM</option>
                              <option value="2000-2200">8PM-10PM</option>
                              <option value="2200-0000">10PM-12PM</option>
                            </select>
                            <label for="floatingSelect">CHOOSE TIME SLOT:</label>
                        </div>
                    </div>
                    
                
                    <div class="row" style="margin-top: 10px;">
                        <div id="uande" class="form-group col-lg-8  " >
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['userEmail'] ?>">
                            <input name="username" type="username" class="form-control" id="exampleFormControlInput2" style='margin-top:10px;' value="<?php echo $_SESSION['userName'] ?>"/>
                            
                            <div  id="cancelbook">
                                <button type="submit" name="book" class="btn btn-success"><a style="text-decoration:none;color: white;">Book</a></button>
                              </div>
                        </div>
                    </div>
        
                </div>    
             </form>
            <?php } ?>
       
      </div>
    </div>
    
    
    
    
    <div id="iphone-book">
        
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