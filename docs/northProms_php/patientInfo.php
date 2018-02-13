
<!-- in order to runing the codes, users need to set up the values of $servername,$name,$pw,$dbName -->

<!-- use $_SESSION['hospitalNumber'] or $nhsNumber = $_SESSION['nhsNumber'] to search the patient in database and extract the other inforamtion of this patient and display it at html-->
<!--Base on the operaion of the patient, goes to the relation table in database and see what questionnaires the patien need to be answering and then extract them and display them -->
<!--  user can choose what questionnare to answer and the will goes to different pages for different questionnaires -->
<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);


    session_start();


$questionnaires = array();
$operation= "";


if($_SESSION['hospitalNumber'] != NULL)
{


 $hospitalNumber  = $_SESSION['hospitalNumber'];

     $sql = "SELECT title,firstname,surname,middlename,nhsNumber,hospitalNumber,email,gender,dateOfBirth,dateOfOperation,operation,side FROM patientINFO where hospitalNumber ='$hospitalNumber'";
        $result = $db->query($sql);
    $row = $result->fetch_assoc();
     $_SESSION['title']=$row["title"];
    $_SESSION['firstname']=$row["firstname"];
    $_SESSION['surname']=  $row["surname"];
    $_SESSION['middlename']= $row["middlename"];
   // $_SESSION['forename'] = $row["forename"];
    $_SESSION['gender'] = $row["gender"];
    $_SESSION['dateOfBirth'] = $row["dateOfBirth"];
    $_SESSION['nhsNumber'] = $row["nhsNumber"];
    $_SESSION['hospitalNumber'] = $row["hospitalNumber"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['operation'] = $row["operation"];
    $_SESSION['dataOfOperation'] = $row["dateOfOperation"];
    $_SESSION['side'] = $row["side"];

    $operation =  $_SESSION['operation'] ;

     $sql = "SELECT `PROCUDURE` FROM `OPERATION` WHERE CODE ='$operation'";
     $result = $db->query($sql);
     $row = $result->fetch_assoc();
     $_SESSION['operationName'] = $row["PROCUDURE"];


  if ( isset($_SESSION['operation']))
  {

      $operation = $_SESSION['operation'];

      $sql = "SELECT PREQUESTION FROM RELATION2 WHERE CODE LIKE '%$operation%'";
      $result = $db->query($sql);

      $i = 0 ;

      while ($row = $result->fetch_assoc())
    {

     $questionnaires[$i] = $row["PREQUESTION"];

        $i = $i + 1 ;
    }


    $arrlength = count($questionnaires);

  }
}


else{

    $nhsNumber = $_SESSION['nhsNumber'];

    $sql = "SELECT title,firstname,surname,middlename,nhsNumber,hospitalNumber,email,gender,dateOfBirth,dateOfOperation,operation,side FROM patientINFO where nhsNumber ='$nhsNumber'";

    $result = $db->query($sql);

    $row = $result->fetch_assoc();
    $_SESSION['title']=$row["title"];
    $_SESSION['firstname']=$row["firstname"];
    $_SESSION['surname']=  $row["surname"];
    $_SESSION['middlename']= $row["middlename"];
    $_SESSION['gender'] = $row["gender"];
    $_SESSION['dateOfBirth'] = $row["dateOfBirth"];
    $_SESSION['nhsNumber'] = $row["nhsNumber"];
    $_SESSION['hospitalNumber'] = $row["hospitalNumber"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['operation'] = $row["operation"];
    $_SESSION['dataOfOperation'] = $row["dateOfOperation"];
    $_SESSION['side'] = $row["side"];
  //  $_SESSION['forename']=  $row["forename"];
        $sql = "SELECT `PROCUDURE` FROM `OPERATION` WHERE CODE ='$operation'";

     $result = $db->query($sql);
     $row = $result->fetch_assoc();
    $_SESSION['operationName'] = $row["PROCUDURE"];



    if ( isset($_SESSION['operation']))
  {

      $operation = $_SESSION['operation'];

      $sql = "SELECT PREQUESTION FROM RELATION2 WHERE CODE LIKE '%$operation%'";
      $result = $db->query($sql);

      $i = 0 ;

      while ($row = $result->fetch_assoc())
    {

     $questionnaires[$i] = $row["PREQUESTION"];

        $i = $i + 1 ;
    }


    $arrlength = count($questionnaires);

  }





}


     if(isset($_POST['answer'])){

     $questionnaire = $_POST['questionnaire'];

        header ("location:$questionnaire");

    }


  //$arrlength = count($questionnaires);

   //"SELECT PREQUESTION FROM RELATION2 WHERE CODE LIKE '%$operation%'";
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NHS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
body{
  /*background-image: url("http://www.europeanceo.comwp-content/uploads/2014/01/Stethoscope.jpg");*/
  background-position: center;
  background-size: cover;
}
</style>
    <title>PatientInfo</title>

    <style>
    h1{
      border-bottom-style: solid;

    }
    input{
      margin: 8px;
      display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]{
    background-color: #007A25;
    color: white;
    padding: 8px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    }
    </style>

     </head>

    <body>

<div id=page-wrap>
    <h1>Patient Info</h1>

    <div id=page-wrap>

    <style>
    h1{
      font-size: 40px;
      font-family: serif;


    }
    </style>

        <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text"  class="" id="usr" value = "<?php echo  $_SESSION['title'];  ?>">
</div>

<div class="form-group">
  <label for="pwd">Firstname:</label>
  <input type="text" class="" value = "<?php echo   $_SESSION['firstname'];  ?>">
</div>

        <div class="form-group">
  <label for="pwd">Surname:</label>
  <input type="text" class="" value = "<?php echo  $_SESSION['surname'];  ?>">
</div>

        <div class="form-group">
  <label for="pwd">Gender:</label>
  <input type="text" class="" value = "<?php echo      $_SESSION['gender'];  ?>">
</div>
               <div class="form-group">
  <label for="pwd">Date Of Birth:</label>
  <input type="Date" class="" value = "<?php echo  $_SESSION['dateOfBirth'];  ?>">
</div>
        <div class="form-group">
  <label for="pwd">NHS Number:</label>
  <input type="text" class="" value = "<?php echo   $_SESSION['nhsNumber'];  ?>">
</div>
        <div class="form-group">
  <label for="pwd">Hospital Number:</label>
  <input type="text" class="" value = "<?php echo  $_SESSION['hospitalNumber'];  ?>">
</div>
        <div class="form-group">
  <label for="pwd">Email:</label>
  <input type="email" class="" value = "<?php echo    $_SESSION['email'];  ?>">
</div>
        <div class="form-group">
  <label for="pwd">Operation:</label>
  <input type="text" class="" value = "<?php echo     $_SESSION['operation'];  ?>">
</div>
        <p> <?php echo $_SESSION['operationName']; ?></p>
        <div class="form-group">
            <div class="form-group">
  <label for="pwd">Operation Date:</label>
  <input type="text" class="" value = "<?php echo  $_SESSION['dataOfOperation'] ;  ?>">
</div>
        <div class="form-group">
  <label for="pwd">Side:</label>
  <input type="text" class="" value = "<?php echo  $_SESSION['side'];  ?>">
</div>



            <?php   for($x = 0; $x < $arrlength; $x++)
                   {
                     echo $questionnaires[$x];
                     echo "<br>";
                   }

            ?>

         <form action="patientInfo.php" method="post">


             <P>Questionnaire:</P>
             <style>
             p{
              font-weight: bold;
             }
             </style>
                <select name='questionnaire' id='question'>
                <option value='questionnaires/EQ5D.html'>EQ5D</option>
                <option value='questionnaires/EQ5D3.html'>EQ5D3</option>
                <option value='questionnaires/EQ5D5.html'>EQ5D5</option>
                <option value='questionnaires/AOFAS.html'>AOFAS</option>
                 <option value='questionnaires/AOS.html'>AOS</option>
                <option value='questionnaires/ATRS.html'>ATRS</option>
                <option value='questionnaires/BOSTON.html'>BOSTON</option>
                     <option value='questionnaires/BackAndLegPain.html'>BackAndLegPain</option>
                  <option value='questionnaires/COFAS.html'>COFAS</option>
                <option value='questionnaires/footAndAnkelOutcome.html'>footAndAnkelOutcome</option>
                <option value='questionnaires/iHOT12.html'>iHOT12</option>
                <option value='questionnaires/IKDC.html'>IKDC</option>
               <option value='questionnaires/keenOutcome.html'>keenOutcome</option>
                <option value='questionnaires/KOOS.html'>KOOS</option>
                <option value='questionnaires/MDI.html'>MDI</option>
                <option value='questionnaires/MOXFQ.html'>MOXFQ</option>
                <option value='questionnaires/NAHSR.html'>NAHSR</option>
                <option value='questionnaires/NAHSRpatientSatisfaction.html'>NAHSRpatientSatisfaction</option>
                <option value='questionnaires/NDI.html'>NDI</option>
                <option value='questionnaires/NeckAndArmPain.html'>NecKAndArmPain</option>
                <option value='questionnaires/ODI.html'>ODI</option>
                <option value='questionnaires/OES.html'>OES</option>
                <option value='questionnaires/OHS.html'>OHS</option>
                <option value='questionnaires/OKSandAandP.html'>OKSandAandP</option>
                <option value='questionnaires/OSI.html'>OSI</option>
                <option value='questionnaires/OSS.html'>OSS</option>
                <option value='questionnaires/OxfordKeenScore.html'>OxfordKeenScore</option>
                <option value='questionnaires/painVAS.html'>painVAS</option>
                <option value='questionnaires/PEM.html'>PEM</option>

                <option value='questionnaires/QDASH.html'>QDASH</option>
                <option value='questionnaires/SAFAS.html'>SAFAS</option>
                <option value='questionnaires/spineOutcome.html'>spineOutcome</option>
                <option value='questionnaires/TegnerActivity.html'>TegnerActivity</option>
                <option value='questionnaires/UCLAacticity.html'>UCLAacticity</option>
                <option value='questionnaires/URAM.html'>URAM</option>
                <option value='questionnaires/VISAA.html'>VISAA</option>
             >




            </select>




            <br>
           <br> <input type="submit" name= "answer" value="Answer">

            </form>

            </div>
<button><a href="displayresult.php">Result</a></button>
             <style>

#page-wrap {
     width:  1200px;
     margin: 40px auto;

}


      button {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.submitbtn {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}
</style>




    </body>
</html>
