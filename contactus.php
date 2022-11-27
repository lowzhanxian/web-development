<?php
    session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CONTACT US </title>
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
    
    body{background-color: black;}
    .title-span h1{
        color: white;
        font-weight: bold;
    }
    #textarea_{
        width: 70%;
        font-family: Helvetica;
        border-radius: 10px;
        margin-left: 250px;
       
    }
    #textarea_:focus{
       outline: none !important;
        
        box-shadow: 0 0 10px pink;}
    
    @media only screen and (max-width: 400px) {
        div.gmap_canvas{
            width: 390px;
        }
        #textarea_{
            margin-left:0px;
        }
        }   
        
   
        </style>
    </head>
    <body>
        <?php require ('header.php'); ?>
        <div id="titlename" style="margin-top:-20px;">
            <h1 style="color: white;font-size: 35px;text-align: center;background-image: url('image/badminton.png')">
                Contact Us
            </h1>
        </div>
        <div class="mapouter" style="margin-top:-8px;">
            <div class="gmap_canvas">
                <iframe width="1520" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=georgetown%20%20penang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                
                <br>
                <style>.mapouter{position:relative;text-align:center;height:500px;width:1520px;}</style>
                <a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1520px;}</style>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-5 text-center">
                    <div class="title-span">
                        <h1><span >CLT SPORT CENTRE</span></h1>
                        
                        <p style="background-color:grey;border-radius: 5px;">Address:CLT SPORT CENTRE,PENANG</p>
                        <p style="background-color:grey;border-radius: 5px;margin-top: -20px;">Email:<a href="mailto:lowzhanxian9218@gmail.com" style="color:white;text-decoration: none;">lowzhanxian9218@gmail.com</a></p>
                        <p style="background-color:grey;border-radius: 5px;margin-top: -20px;">Contact Phone:<a href="tel:012-722-9218" style="color:white;text-decoration: none;">+6012-722-9218</a></p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container_2" id="feedback_part">
            <div>
                <h3 style="text-align:center;color: white;">
                    FeedBack
                </h3>
            </div>
            
<?php
    //Include required phpmailer files
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';
    //Define name spaces
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        if(isset($_POST["feedback"])){

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
                $feedback = $_POST['userFeedback'];
                $username = $_SESSION["userName"];
                $useremail = $_SESSION["userEmail"];
                
                $sql = "INSERT INTO feedback (username, userFeedback,useremail) VALUES ('$username' , '$feedback' ,'$useremail')";

                                if (mysqli_query($conn, $sql)) {
                                    echo "<script> alert('Feedback Receive!');window.location.replace('homepage.php'); </script>";
                                }
                                else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
            }
        }
        else {
        ?>
            <form id="feedbackForm" action="#" method="post">
                <textarea name="userFeedback"  id="textarea_" placeholder="Please Fill Up Your Feedback On Provided Area...."></textarea>
                <button type="submit" name="feedback" id="feedbackbutton" style="width:100px;padding: 10px 10px;border-radius: 20px;background-color: red;color: white;font-family: Helvetica;">Submit</button>
            </form>
                
        <?php } ?>
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
