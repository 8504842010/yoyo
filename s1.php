<?php
session_start();
$x=new PDO ('mysql:host=localhost;port=3306;dbname=search','root','root');
$x->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit']) && $_POST['firstname']){
    //$_SESSION['output']="please search";
    $_SESSION['firstname']=$_POST['firstname'];
header("Location: http://localhost/search/result.php");
}
?>
<html>
    <head>
        <title>Search Engine</title>
         <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="s1.css"> 
    </head>
<body>
        <h1><i>MY SEARCH ENGINE</i></h1>
    <form class="form" method="post" action="s1.php">
    <input type="text" name="firstname" placeholder="Enter the first-name" size="60"> 
    <input type="submit" name="submit" value="Search">    
    </form>
    
     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>