<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/logotitle.png" type="image/logotitle.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    #navbar{
        border: 1px solid black;
    }
    #adminHome:hover{
        background-color: grey;cursor: pointer;
    }
    #adminViewUser:hover{
        background-color: grey;cursor: pointer;
    }
    #adminViewFeedBack:hover{
        background-color: grey;cursor: pointer;
    }
    #LogOut:hover{
        background-color: grey;cursor: pointer;
    }
    
    ul{
        margin-top: -20px;
        width: 20%;
        height:650px;
        
    }
    #homeview{
       
        border-radius:20px;
    }
    #homepageview{
        margin-left:750px;
        margin-top:-400px;
        color:white;
    }
    #userButton{
        margin-left:600px;
        background-color:black;
          
        width:300px;
        border-radius:30px;
        padding:10px 10px;
        
    }
    #userButton:hover{
        background-color:skyblue;
          
         border-color:skyblue;
    }
    #userFeedbackButton {
        background-color:black;
        
        width:300px;
        border-radius:30px;
        padding:10px 10px;
        
    }
    #userFeedbackButton:hover{
        background-color:skyblue;
          
          border-color:skyblue;
    }
    #aUser{
        text-decoration:none;
        color:white;
    }
    #aFeedback{
        text-decoration:none;
        color:white;
    }
    body{
        background-color:#CC99FF;
    }
    
    
    
    
    
    
    


        


        
    

            






</style>

</head>
<nav id="navbar" class="navbar  px-3 mb-3 bg-dark" >
            <a class="navbar-brand" href="admin_homepage.php" style="color:white;"><img src="image/logotitle.png" height="100px" alt="logo"/>CLT SPORT CENTRE</a>
          
            
    
        </nav>
        <ul class="nav flex-column nav-pills bg-dark">
            
            <li class="nav-item" id="adminHome">
                <a class="nav-link" href="admin_homepage.php"  style="color:white;">Home</a>
            </li>  
           
            <li class="nav-item" id="adminViewUser">
              <a class="nav-link" href="adminViewUser.php"  style="color:white;">View User Booking</a>
            </li>
            <li class="nav-item" id="adminViewFeedBack">
              <a class="nav-link" href="adminViewFeedback.php" style="color:white;">View User FeedBack</a>
            </li>
            
            
          </ul>
<body >
        
    
    
    <div id="homeview" ">
        <h1 id="homepageview">
            <span>Welcome, Admin</span> 
        </h1>
        <button id="userButton"><a href="adminViewUser.php" id="aUser">View User Booking</a></button>
        <button id="userFeedbackButton"><a href="adminViewFeedback.php" id="aFeedback">View User FeedBack</a></button>
    </div>
    
    
        
        
        
        
        
        
        
        
        
        
        
        


  
            
   
    
    

                
    
    
        


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html> 
