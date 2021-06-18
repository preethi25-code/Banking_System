<?php
$year = date('Y');
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- font -->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style>
    body{
    margin: 0;
    padding: 0;
}
.container-fluid{
 width:100vw;
 height:100vh;
    
    background-image: url('bank.jpg');
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.navbar-nav{
    position: absolute;
    right: 0;
}

button{
    color: black;
}
.nav-link{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 18px;
    color: black;
    cursor: pointer;
}
h1{
    font-size: 12vw;
    color:gold;
    margin-top: 30vh;
    padding-left: 13vw;
    font-family: 'Cookie', cursive;
}
.row> p{
    color: honeydew;
    padding-left: 19vw;
    position: absolute;
    top: 0;bottom: 0;right: 0;left: 0;
    padding-top: 52vh;
    font-family: 'Cookie';
    font-size: 2.5vw;
}
.btn{
    color: white !important;
    background-color: turquoise;
    font-size: 1vw;
    margin-right: 15vw;
}
.btn:hover{
    color:black;
}
#footer p{
    color: black;
    margin-top: 20vh;
    font-size: 2vw;
    font-weight: 500;
}
    </style>
</head>

<body>
    <div class="main-container nav-bg-color">
          <div class="inside-container nav-contain">
            <nav class="navbar navbar-expand-lg navbar-light" >
              <div class="butns"><p style="position: absolute; right: 30;">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
              
              
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav nav-list ml-auto">
                    <div class="butns"><p style="position: absolute; right: 0;">
                    <a class="menu" href="index.php">HOME</a>
              <style></style></div></div></nav></div></div></div></p>


       
                <CENTER><h2>WELCOME TO SPARKS BANK</h2></CENTER>
                <br>
               <div class="butns"><p style="position: absolute; right: 0;">
                   <button id="trans" class="btn px-4 py-2 mt-4">Transfer Money</button>
                   <br>
                   <br>
                   <img src="mg.png" class="img-fluid" alt="" style="width:130px;height:130px;">
                   
                        <a href="users.php" class="about-btn" role="button"><b>USER</b></a>
                        <br>
                        <br><br><br>
                        <img src="transfer.jpg" class="img-fluid" alt="" style="width:130px;height:130px;">
                        <a href="history.php" class="work-btn" role="button"><b>VIEW TRANSACTIONS</b></a>
                      </div></p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><marquee behavior="scroll" direction="left"><h4></font><b>WELCOME TO SPARKS BANK! MAKE TRANSACTION EASIER</h4></b></marquee>
                      <p><h1><b>Designed by  preethi vasu|| As a part of spark foundation internship</b></h1></p>
            <!-- TRANSFER CREDIT MODAL START-->
  <div id="transModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="content">
           
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Transfer Money</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default" style="padding: 10px;">
                       <h2 class="text-center">Choose an account</h2>
                           <hr>
                           <?php 
                              $stmt = $pdo->query("SELECT * FROM users");
                              $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                              if(count($rows)>0){
                                 foreach($rows as $row ) { ?>

                                <div class="panel panel-default">
                                   <div class="panel-body">
                                      <div class="row" style="padding-left: 10px;">
      
                                        <?php echo('<a class="name" href="profile.php?user_id='.$row['user_id'].'">'.htmlentities($row['user_name']).'</a> ');
                                         ?>   
                                      </div> 
                                      <p><strong>Email Id: </strong><?php echo htmlentities($row['email']); ?><br>  
                                      <strong>Balance:</strong> Rs.<?php echo htmlentities($row['user_credits']); ?></p> 
                                   </div>
                                </div>
                            <?php }
                              }
                          ?>
                  </div>  
                </div>
            </div>
        </div>
    </div>
 <!-- TRANSFER CREDIT MODAL END-->
     </div>
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script>
      $(document).ready(function(){
        $('#trans').click(function(){
                $('#transModal').modal('show');
            });
      });
    </script> 
</body>
</html>