
<!-- in order to runing the codes, users need to set up the values of $servername,
$name,$pw,$dbName --?>\

<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

if(isset($_POST['Add'])){

    session_start();



$title =$_POST['title'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$forename = $_POST['forename'];
$middlename= $_POST['middlename'];
$nhsNumber = $_POST['nhsNumber'];
$hospitalNumber= $_POST['hospitalNumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$operation = $_POST['operation'];
$side = $_POST['side'];
$day = $_POST['day'];
$month =$_POST['month'];
$year = $_POST['year'];
$day1="$year-$month-$day";
$day2 = $_POST['day2'];
$month2 =$_POST['month2'];
$year2 = $_POST['year2'];
$day3="$year2-$month2-$day2";
      $sql = " INSERT INTO `patientINFO`(`title`, `firstname`, `surname`, `middlename`, `hospitalNumber`, `nhsNumber`, `email`, `gender`, `dateOfBirth`, `dateOfOperation`, `operation`, `side`, `forename`) VALUES  ('$title','$firstname','$surname','$middlename','$hospitalNumber','$nhsNumber','$email','$gender','$day1','$day3','$operation','$side','$forename')";
  $db->query($sql);

 $_SESSION['hospitalNumber'] = $hospitalNumber;
  header ("location:patientInfo.php");


   }
?>
