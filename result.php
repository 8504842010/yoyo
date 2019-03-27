<?php
session_start();
$x=new PDO ('mysql:host=localhost;port=3306;dbname=search','root','root');
$x->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(isset($_SESSION['firstname'])){
    //$value=$_SESSION['firstname'];
    //echo "hello";
   print_r($value);
    //$value=$_SESSION['firstname'];
 $y=$x->prepare("select f_name,l_name,branch,college,shift,p_year from signup where f_name=:xyz");
    $y->execute(array(":xyz" =>$_SESSION['firstname']));
    echo '<table border="1">'."\n";
      echo "<tr><td>";
    echo "f_name";
    echo("</td><td>");
    echo "l_name";
    echo("</td><td>");
    echo "branch";
    echo("</td><td>");
    echo "college";
    echo("</td><td>");
    echo "shift";
    echo("</td><td>");
    echo "p_year";
    echo("</td></tr>\n");
    //echo '<table border="1">'."\n";
while($row = $y->fetch(PDO::FETCH_ASSOC)){
    if ( $row === false ) {
    $_SESSION['error'] = 'Bad value for user_id';
    echo " no user exist";
    header( 'Location: login.php' ) ;
}   else{
     echo "<tr><td>";
    echo(htmlentities($row['f_name']));
    echo("</td><td>");
    echo(htmlentities($row['l_name']));
    echo("</td><td>");
    echo(htmlentities($row['branch']));
    echo("</td><td>");
    echo(htmlentities($row['college']));
    echo("</td><td>");
    echo(htmlentities($row['shift']));
    echo("</td><td>");
    echo(htmlentities($row['p_year']));
    echo("</td></tr>\n");
    }
}
 
}
?>

