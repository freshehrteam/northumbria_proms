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
    
    $q1 =$_POST['q1'];
    $q2 =$_POST['q2'];
    $q3 =$_POST['q3'];
    $q4 =$_POST['q4'];
    $q5 =$_POST['q5'];
    $q6 =$_POST['q6'];
    $q7 =$_POST['q7'];
    $q8 =$_POST['q8'];
    $q9 =$_POST['q9'];
    $q10 =$_POST['q10'];
    $q11 =$_POST['q11'];
    $q12 =$_POST['q12'];
    $q13 =$_POST['q13'];
    $q14 =$_POST['q14'];
    $q15 =$_POST['q15'];
    $q16 =$_POST['q16'];
    $q17 =$_POST['q17'];
    $q18 =$_POST['q18'];
    $q19 =$_POST['q19'];
    $q20 =$_POST['q20'];
    $q21 =$_POST['q21'];
    $q22 =$_POST['q22'];
    $q23 =$_POST['q23'];
    $q24 =$_POST['q24'];
    
    $q25 =$_POST['q25'];
    $q26 =$_POST['q26'];
    $q27 =$_POST['q27'];
    $q28 =$_POST['q28'];
    $q29 =$_POST['q29'];
    $q30 =$_POST['q30'];
    $q31 =$_POST['q31'];
    $q32 =$_POST['q32'];
    $q33 =$_POST['q33'];
    $q34 =$_POST['q34'];
    $q35 =$_POST['q35'];
    $q36 =$_POST['q36'];
    
     $q37 =$_POST['q37'];
    $q38 =$_POST['q38'];
    $q39 =$_POST['q39'];
    $q40 =$_POST['q40'];
    $q41 =$_POST['q41'];
    $q42 =$_POST['q42'];

    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql =  " INSERT INTO `KOOS`(`S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `SP1`, `SP2`, `SP3`, `SP4`, `SP5`, `Q1`, `Q2`, `Q3`, `Q4`, `hospitalNumber`, `answeredDate`, `code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21,$q22,$q23,$q24,$q25,$q26,$q27,$q28,$q29,$q30,$q31,$q32,$q33,$q34,$q35,$q36,$q37,$q38,$q39,$q40,$q41,$q42,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    
   
  
  
    
  header ("location:../patientInfo.php");
}




?>