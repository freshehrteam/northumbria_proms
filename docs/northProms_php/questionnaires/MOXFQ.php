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
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql =  "  INSERT INTO `MOXFQ`(`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    
  
    
   
    
  header ("location:../patientInfo.php");
}




?>