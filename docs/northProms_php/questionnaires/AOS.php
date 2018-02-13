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
    $p3 =$_POST['p3'];
    $p4 =$_POST['p4'];
    $p5 =$_POST['p5'];
    $p6 =$_POST['p6'];
    $p7 =$_POST['p7'];
    $p8 =$_POST['p8'];
    $p9 =$_POST['p9'];
    $d1 =$_POST['d1'];
    $d2 =$_POST['d2'];
    $d3 =$_POST['d3'];
    $d4 =$_POST['d4'];
    $d5 =$_POST['d5'];
    $d6 =$_POST['d6'];
    $d7 =$_POST['d7'];
    $d8 =$_POST['d8'];
    $d9 =$_POST['d9'];
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql =  "INSERT INTO `AOS`(`P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$hospitalNumber,'$day','$operation','$comment')";
  $db->query($sql);
    
   
    
   
    
  header ("location:../patientInfo.php");
}




?>


