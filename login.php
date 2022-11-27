<?php
    session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/logotitle.png" type="image/logotitle.png">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body
        {background-image: url("image/aaaa.jpg");
         background-repeat: no-repeat;
         background-size: 100%;
         min-height:1000%;
         opacity: 0.9;}
        
        
        #wholelogin{border-radius: 30px;}
        
        #logintitle{text-align:center;color: white;}
        #email{margin-left: 150px;}
        #password{margin-left: 150px;margin-top: 10px;}
        
        #login{font-size: 50px;margin-left:0px;}
        
        
        .title-word {
            animation: login 5s linear infinite;}
        #seenbutton{
            position: absolute;
            top: 430px;
            right: 630px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            width:30px;
            height: 30px;
            background-color: whitesmoke; 
            }
            #seenbutton::before{
                content: '\f06e';
                font-family: fontAwesome;
            }
            #seenbutton.hide::before{
                content: '\f070';
                
            }

            
              
            

            
            @keyframes login {
            0% {color:blue;}
            20%{color:purple;}
            40%{color:light blue;}
            70% {color:skyblue;}
            90%{color:red;}
            100%{color:yellow;}
          }
          #newusertext{
              font-size: 20px;
          }
          
        @media only screen and (max-width: 400px) {
         body
        {
            background-image: url("image/aaaa.jpg");
            background-repeat: no-repeat;
            background-size: 1000%;
            min-height:1000%;
            opacity: 0.9;}
        #email{margin-left: 50px;width:300px;}
        #password{margin-left: 50px;width: 300px;margin-top: 10px;}
        .row{width: 100%;margin-left: 3px;}
        #seenbutton{
            position: absolute;
            top: 505px;
            right: 50px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            background-color: whitesmoke; 
            }
            
          }
       
          

     
    
    
    
    
    </style>
  
  </head>
  <body>
      
      
          <div class="row">
              <div class="col-lg-5 m-auto">
                  <div class="login mt-5 bg-dark "id="wholelogin">
                      <div class="logintitle text-center mt-3" >
                            <span class="title-word title-word-1" id="login">Login</span>
                            <div class="loginimg text-center ">
                                <img src="image/user.png" width="200px" height="180px" />
                            </div>
                                  <?php
        if(isset($_POST["login"])){
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
                        if($_POST['exampleInputEmail1']=="x@dmin" && $_POST['exampleInputPassword1']=="admin123"){
                            $_SESSION["admin"] = true; 
                            header("Location: admin.php");
                        }
                        
                        else if($_POST['exampleInputEmail1'] == "x@dmin" && $_POST['exampleInputPassword1'] != "admin123"){
                            echo "<script> alert('Please enter correct login info!'); window.location= \"admin.php\";</script>";
                        }
                        
                        else{
                            $useremail = strtolower($_POST['exampleInputEmail1']);
                            $password = $_POST['exampleInputPassword1'];
                            $check_useremail = "0";
                            $result1 = mysqli_query($conn, "SELECT * FROM register_login WHERE userEmail='".$useremail."' ");
                            
                            while($row = mysqli_fetch_assoc($result1)){
                                $check_useremail = $row['userEmail'];
                                $check_password = $row['userPassword'];
                                $getUserName = $row['userName'];
                                $getUserID = $row['userId'];
                                $getUserEmail = $row['userEmail'];
                                $getMemberType = $row['memberType'];
                            }
                            
                            
                            if ($useremail == $check_useremail){
                                
                                $result2 = mysqli_query($conn, "SELECT * FROM register_login WHERE userEmail='".$useremail."'  AND userPassword='".$password."' ");
                            
                                while($row = mysqli_fetch_assoc($result2)){
                                    $check_useremail = $row['userEmail'];
                                    $check_password = $row['userPassword'];
                                    $getUserName = $row['userName'];
                                    $getUserID = $row['userId'];
                                    $getUserEmail = $row['userEmail'];
                                    $getUserContact = $row['userContact'];
                                    $getMemberType = $row['memberType'];
                                    $getEndDate = $row['endDate'];
                                }
                                
                                if ($password == $check_password){
                                    $_SESSION["logged_in"] = true; 
                                    $_SESSION["userName"] = $getUserName; 
                                    $_SESSION["userID"] = $getUserID;
                                    $_SESSION["userName"] = $getUserName;
                                    $_SESSION["userEmail"] = $getUserEmail;
                                    $_SESSION["userContact"] = $getUserContact;
                                    $_SESSION["memberType"] = $getMemberType;
                                    $_SESSION["endDate"] = $getEndDate;
                                    echo "<script>window.close(login.php);</script>";
                                    header("Location: homepage.php");
                                    
                                   
                                }
                                
                                else if ($password != $check_password){
                                    echo "<script> alert('wrong password!');window.history.back();; </script>";
                                }
                            }
                            
                            
                            else if ($useremail != $check_useremail ){
                                echo "<script> alert('email not registered!');window.history.back();; </script>";
                            }
                            
                        }
                    }
                    mysqli_close($conn);
                }
                    
                else{
        ?>
                            <form id="login" class="input-group-custom" action="#" method="post">
                                <div class="form-group col-lg-6" id="email" >
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

                                </div>
                                <div class="form-group col-lg-6"id="password">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password" required>
                                    <span id="seenbutton"></span>
                                </div>
                                <div class="register text-center mt-3">
                                    <p id="newusertext"style="color:white;">New User? <a id="registerLink"href="register.php">Register Now</a></p>
                                </div>
                                <div class="btn  col-lg-12 m-auto" >
                                    <button type="submit" name="login" class="btn btn-outline-danger">Login</button>
                                </div>
                            </form>
                                <?php } ?> 
                      </div>
                  </div>
              </div>   
        </div> 
      <script>
          LetexampleInputPassword1=document.getElementById('exampleInputPassword1');
          Letseenbutton= document.getElementById('seenbutton');
          
          
          //show the hidden password
          seenbutton.onclick=function(){
              if(exampleInputPassword1.type==='password'){
                  exampleInputPassword1.setAttribute('type','text');
                  seenbutton.classList.add('hide');
              }
              else{
                  exampleInputPassword1.setAttribute('type','password');
                  seenbutton.classList.remove('hide');
              }
          }
      </script>
    
      
                  
                
               
                  
             
          
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>