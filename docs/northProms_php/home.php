<!-- php code assigns the value of hosopital Number we used to search a patient to $_SESSION['hospitalNumber'] or assigns the value of  nhsNumber we used to search a patient to $_SESSION['nhsNumber'] -->
<?php

session_start();

if(isset($_POST['search'])){



   if(isset($_POST['search'])){



          $_SESSION['hospitalNumber'] = $_POST['hospitalNumber'];



          $_SESSION['nhsNumber'] = $_POST['nhsNumber'];



   }


    header ("location:patientInfo.php");
}





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


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">

<style>
body{
  /*background-image: url("http://www.europeanceo.comwp-content/uploads/2014/01/Stethoscope.jpg");*/
  background-position: center;
  background-size: cover;
}
</style>

<!DOCTYPE html>
<html>


<head>

    <title>Home page</title>

     <style>
    h1{
      border-bottom-style: solid;
    }
      input{
      margin: 10px;
      display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

    }
    </style>
     </head>

    <body>

  <div id="page-wrap">

    <h1> Home Page </h1>

      <style>
    h1{
      font-family: serif;
      font-weight: bold;
      font-size: 40px;
    }
    </style>

<div id="page-wrap">

        <strong>Search Patient Records</strong>

          <form action="home.php" method="post">
              Hospital number: <input type="text" name="hospitalNumber" ><br>
              NHS number: <input type="text" name="nhsNumber" ><br>

             <br> <input class="submitbtn" type="submit" name= "search" value="Search">
</form>
        <br>

        <button><a href="addNewPatient.html">Add Patient</a></button>


    <button><a href="exportTable/exportData.html">Export table</a></button>
    <button><a href="exportOperationdata/exportOperation.html">Exportdata</a></button>

        </div>

      <style>

#page-wrap {
     width:  1200px;
     margin: 50px auto;

}


      button {
    background-color: white;
    color: black;
    border: 2px solid #fff;
    border-radius: 8px;
}

.submitbtn {
    background-color: white;
    color: black;
    border: 2px solid 555050;
    border-radius: 8px;
}
</style>
    </body>
</html>
