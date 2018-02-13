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
    
    $q1 =$_POST['s1'];
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql = "  INSERT INTO `UCLAacticity`(`CurrentActivityLevel`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$hospitalNumber,'$day',$operation,'$comment')";
  
     $db->query($sql);
    
    

    
   header ("location:../patientInfo.php");
}




?>
