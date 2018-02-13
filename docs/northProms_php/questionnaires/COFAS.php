<!-- store data in to this questionnaire' table in database -->
<!-- in order to runing the codes, users need to set up the values of $servername,
$name,$pw,$dbName --?


<?php
$servername = "localhost";  //server name 
    $name = "keronglong";    //user name 
    $pw = "ronglongke0754";   //password
    $dbName = "javaProject"; //database name 
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

session_start();
$operation = $_SESSION['operation'];
$hospitalNumber =   $_SESSION['hospitalNumber'];
if(isset($_POST['submit'])){
    
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    $p5 =$_POST['p5'];
    $d1 =$_POST['d1'];
    $d3 =$_POST['d3'];
    $d6 =$_POST['d6'];
    $d7 =$_POST['d7'];
    $d9 =$_POST['d9'];
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql =  " INSERT INTO `COFAS`(`P1`, `P2`, `P5`, `D1`, `D3`, `D6`, `D7`, `D9`, `hospitalNumber`, `answeredDate`, `code`,`comment`) VALUES  ($p1,$p2,$p5,$d1,$d3,$d6,$d7,$d9,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    
   
  
   
    
  header ("location:../patientInfo.php");
}




?>


