<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);


    session_start();

$i = 0 ;
 $arrlength = 0;

if($_SESSION['hospitalNumber'] != NULL)
{

    if ( isset($_SESSION['operation']))
  {
  $hospitalNumber = $_SESSION['operation'];
      $operation = $_SESSION['operation'];





      while ($row = $result->fetch_assoc())
    {

     $questionnaires[$i] = $row["PREQUESTION"];

        $i = $i + 1 ;
    }


    $arrlength = count($questionnaires);

  }
}


    function generateTable($tableName){

        $sql = "SELECT * FROM $tableName WHERE hospitalNumber ";
  $result =    $db->query($sql);

    }


}





?>
