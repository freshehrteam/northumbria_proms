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
  
    $q9a =$_POST['q9a'];
    $q9b=$_POST['q9b'];
    $q9c =$_POST['q9c'];
    $q9d =$_POST['q9d'];
    $q9e =$_POST['q9e'];
    $q9f =$_POST['q9f'];
    $q9g =$_POST['q9g'];
    $q9h =$_POST['q9h'];
    $q9i =$_POST['q9i'];

    $q10a =$_POST['q10a'];
    $q10b=$_POST['q10b'];

    
    
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql = "   INSERT INTO `IKDC`(`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9a`, `Q9b`, `Q9c`, `Q9d`, `Q9e`, `Q9f`, `Q9g`, `Q9h`, `Q9i`, `Q10a`, `Q10b`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9a,$q9b,$q9c,$q9d,$q9e,$q9f,$q9g,$q9h,$q9i,$q10a,$q10b,$hospitalNumber,'$day',$operation,'$comment');";
  $db->query($sql);
    
    
     
   
   
    
   header ("location:../patientInfo.php");
}




?>
