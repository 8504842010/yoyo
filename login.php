<?php
session_start();
if(isset($_POST['submit1'])){
    header("Location: http://localhost/search/login1.php");
}
if(isset($_POST['submit2'])){
    header("Location: http://localhost/search/signup.php");
}
?>
<html>
    <head>
        <title>LOGIN OR SIGNUP PAGE</title>
         <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css"> 
    </head>
<body>
    <h1><i>WELCOME TO ALUMINI SEARCH ENGINE</i></h1>
    <p><b><i>Please Login or SignUp for Search anyone</i></b></p>
    <form  method="post">
    <input type="submit" name="submit1" value="login" class="b1" > 
    <input type="submit" name="submit2" value="signup" class="b1">    
    </form>
    
     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>