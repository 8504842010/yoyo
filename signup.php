<?php
session_start();
$x=new PDO ('mysql:host=localhost;port=3306;dbname=search','root','root');
$x->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_POST['submit'])){
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['branch']) && isset($_POST['college']) && isset($_POST['shift']) && isset($_POST['passout'])){
        $y=$x->prepare("insert into signup(f_name,l_name,u_name,password,branch,college,shift,p_year) values(:name,:lname,:uname,:pass,:branch,:college,:shift,:pyear)");
    $y->execute(array(
        ':name'=>$_POST['firstname'],
        ':lname'=>$_POST['lastname'],
        ':uname'=>$_POST['username'],
        ':pass'=>$_POST['password'],
        ':branch'=>$_POST['branch'],
        ':college'=>$_POST['college'],
        ':shift'=>$_POST['shift'],
        ':pyear'=>$_POST['passout']));
        header("Location: http://localhost/search/s1.php");
    }
}

?>
<html>
    <head>
        <title>SIGN-UP PAGE</title>
         <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: blueviolet;
        }
        h1{
            text-align: center;
            color: aqual;
            margin-top: 10%;
        }
        form{
            text-align: center;
        }
        </style> 
    </head>
<body>
    <h1><i>FILL THE DETAILS!</i></h1>
    <form class="form" method="post">
        <p> FIRST-NAME       : <input type="text" name="firstname"></p>
        <p> LAST-NAME        : <input type="text" name="lastname"></p>
        <p> USER-NAME        : <input type="text" name="username"></p>
        <p> PASSWORD         : <input type="password" name="password"></p>
        <p> BRANCH       : <input type="text" name="branch"></p>
        <p> COLLEGE      : <input type= "text" name="college"></p>
        <p> SHIFT        : <input type="text" name="shift"></p>
        <p> PASSOUT-YEAR : <input type="text" name="passout"></p>
        <p> <input type="submit" name="submit" value="LOGIN">  </p>  
    </form>
    
     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script srcSHIFT    strap.min.js"></script>
    