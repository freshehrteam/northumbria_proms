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
    $q8a =$_POST['q8a'];
    $q8b =$_POST['q8b'];
    $q8c =$_POST['q8c'];
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    if(isset($_POST['q8a']))
    {
        $sql =  "INSERT INTO `VISAA`(`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8A`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8a,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    }
     if(isset($_POST['q8b']))
    {
        $sql =  "INSERT INTO `VISAA`(`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8B`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8b,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    }
     if(isset($_POST['q8b']))
    {
        $sql =  "INSERT INTO `VISAA`(`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8C`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8c,$hospitalNumber,'$day',$operation,'$comment')";
  $db->query($sql);
    }
    
 
   
    
  header ("location:../patientInfo.php");
}




?>



