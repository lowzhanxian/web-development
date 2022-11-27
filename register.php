<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/logotitle.png" type="image/logotitle.png">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body
        {background-image: url("image/aaaa.jpg");
         background-repeat: no-repeat;
         background-size: 100%;
         min-height:1000%;
         opacity: 0.9;}
        
        #wholeregister{border-radius: 30px;}
        
       
        #email{margin-left: 150px;}
        #username{margin-left: 150px;margin-top: 10px;}
        #contact{margin-left: 150px;margin-top: 10px;}
        #password{margin-left: 150px;margin-top: 30px;}
        
        #register{font-size: 50px;margin-left:0px;}
        
        
        .title-word {
                animation: register 5s linear infinite;
            }
        #seenbutton{
            position: absolute;
            margin-top: -35px;
            margin-left: 260px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
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
            #registernow{
                font-size: 20px;
            }
            
              
            

            
            @keyframes register {
            0% {color:blue;}
            20%{color:purple;}
            40%{color:light blue;}
            70% {color:skyblue;}
            90%{color:red;}
            100%{color:yellow;}
          }
     
          @media only screen and (max-width: 400px) {
              body
        {background-image: url("image/aaaa.jpg");
         background-repeat: no-repeat;
         background-size: 1000%;
         min-height:1000%;
         opacity: 0.9;}
          
          #email{margin-left: 50px;width: 300px;}
        #username{margin-left: 50px;width: 300px;margin-top: 10px;}
        #contact{margin-left: 50px;width: 300px;margin-top: 10px;}
        #password{margin-left: 50px;width: 300px;margin-top: 30px;}}
          .row{
              width: 100%;margin-left: 3px;
          }
    
    
    
    </style>
  
  </head>
  <body>
         
              <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="login mt-5 bg-dark "id="wholeregister">
                        <div class="logintitle text-center mt-3" >

                              <span class="title-word title-word-1" id="register">Register</span>

                              <div class="loginimg text-center ">
                                  <img src="image/user.png" width="200px" height="180px" />
                              </div>
                            <?php
                                        if(isset($_POST["register"])){
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
                                                                $useremail = strtolower($_POST['exampleInputEmail']);
                                                                $result1 = mysqli_query($conn, "SELECT userEmail FROM register_login WHERE userEmail='".$useremail."' ");

                                                             while($row = mysqli_fetch_assoc($result1)){
                                                                 $check_useremail = $row['userEmail'];
                                                             }
                                                                if($useremail == $check_useremail){
                                                                    echo "<script> alert('Email has been used!');window.history.back(); </script>";
                                                                }

                                                                else{
                                                                    $name = $_POST['exampleInputuname1'];
                                                                    $email = strtolower($_POST['exampleInputEmail']);
                                                                    $pnumber = $_POST['exampleInputContact1'];
                                                                    $password = $_POST['exampleInputPassword1'];
                                                                    $memberType = "basic";

                                                                    $sql = "INSERT INTO register_login (userName, userContact, userPassword, userEmail, memberType) VALUES ('$name', '$pnumber', '$password', '$email', '$memberType')";

                                                                    if (mysqli_query($conn, $sql)) {

                                                                        echo "<script> alert('Thanks for joining us!');window.location= \"login.php\"; </script>";
                                                                    }
                                                                    else {
                                                                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                                    }
                                                                }

                                                    }
                                                    mysqli_close($conn);
                                                        }

                                                     else{
                                            ?>
          


                                  <form id="register" action="#" method="post">
                                    <div class="form-group col-lg-6" id="email" >
                                      <input type="email" class="form-control" id="exampleInputEmail1"  name="exampleInputEmail" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group col-lg-6"id="username">
                                      <input type="name" class="form-control" id="exampleInputuname1" name="exampleInputuname1" placeholder="Enter Your Username" required>
                                    </div>
                                    <div class="form-group col-lg-6"id="contact">
                                      <input type="tel" pattern="[0-9]{10}" class="form-control" id="exampleInputcontact1" name="exampleInputContact1" placeholder="Phone Contact" required>
                                      
                                    </div>
                                    <div class="form-group col-lg-6"id="password">   
                                      <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1"placeholder=" Create Password" required>
                                      <span id='seenbutton'></span>
                                    </div>


                                    <div class="register text-center mt-3">
                                        <p  id="registernow" style="color:#ffffff">Already Have Account? <a href="login.php">Login Now</a></p>

                                    </div>

                                    <div class="btn  col-lg-12 m-auto" >
                                        <button type="submit" name="register" class="btn btn-outline-danger">Register</button>
                                    </div>
                                  </form>
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
                  
                      
                  
                      
                  
       
                  
                
               
                  
             
          
<?php } ?>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>