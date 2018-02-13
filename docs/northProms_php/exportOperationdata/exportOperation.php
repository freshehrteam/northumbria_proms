


<?php

//change server name, username, password,databasename

$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name 
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);
$output = "";
if(isset($_POST["export_excel"]))
{


    $sql = "SELECT * FROM AOFAS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
                   <th>Questionnaire</th>
                   <th>P1</th>
                   <th>F1</th>
                   <th>F2</th>
                   <th>F3</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>AOFAS</td>
                  <td>'.$row["P1"].'</td>
                  <td>'.$row["F1"].'</td>
                  <td>'.$row["F2"].'</td>
                  <td>'.$row["F3"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

}
          $sql = "SELECT * FROM AOS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
                   <th>Questionnaire</th>
                   <th>P1</th>
                   <th>P2</th>
                   <th>P3</th>
                   <th>P4</th>
                   <th>P5</th>
                   <th>P6</th>
                   <th>P7</th>
                   <th>P8</th>
                   <th>P9</th>
                   <th>D1</th>
                   <th>D2</th>
                   <th>D3</th>
                   <th>D4</th>
                   <th>D5</th>
                   <th>D6</th>
                   <th>D7</th>
                   <th>D8</th>
                   <th>D9</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';}
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>AOS</td>
                  <td>'.$row["P1"].'</td>
                  <td>'.$row["P2"].'</td>
                  <td>'.$row["P3"].'</td>
                  <td>'.$row["P4"].'</td>
                  <td>'.$row["P5"].'</td>
                  <td>'.$row["P6"].'</td>
                  <td>'.$row["P7"].'</td>
                  <td>'.$row["P8"].'</td>
                  <td>'.$row["P9"].'</td>
                  <td>'.$row["D1"].'</td>
                  <td>'.$row["D2"].'</td>
                  <td>'.$row["D3"].'</td>
                  <td>'.$row["D4"].'</td>
                  <td>'.$row["D5"].'</td>
                  <td>'.$row["D6"].'</td>
                  <td>'.$row["D7"].'</td>
                  <td>'.$row["D8"].'</td>
                  <td>'.$row["D9"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }

          $sql = "SELECT * FROM ATRS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>

                   <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>ATRS</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

           $sql = "SELECT * FROM BackAndLegPain ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
                   <th>Questionnaire</th>

                   <th>Q1</th>
                   <th>Q2</th>

                   <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>BackAndLegPain</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }

     }

          $sql = "SELECT * FROM BOSTON ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>

                   <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>BOSTON</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM COFAS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>P1</th>
                   <th>P2</th>
                   <th>P5</th>
                   <th>D1</th>
                   <th>D3</th>
                   <th>D6</th>
                   <th>D7</th>
                   <th>D9</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>COFAS</td>
                  <td>'.$row["P1"].'</td>
                  <td>'.$row["P2"].'</td>
                  <td>'.$row["P5"].'</td>
                  <td>'.$row["D1"].'</td>
                  <td>'.$row["D3"].'</td>
                  <td>'.$row["D6"].'</td>
                  <td>'.$row["D7"].'</td>
                  <td>'.$row["D9"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }


    $sql = "SELECT * FROM EQ5D ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>know how good or bad your health is TODAY</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>EQ5D</td>
                  <td>'.$row["howIsHealth"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

         $sql = "SELECT * FROM EQ5D3 ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Mobility</th>
                   <th>Self care</th>
                   <th>Usual activities</th>
                   <th>Pain/Discomfort</th>
                   <th>Anxiety/Depression</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>EQ5D3</td>
                  <td>'.$row["Mobility"].'</td>
                  <td>'.$row["Self-Care"].'</td>
                  <td>'.$row["Usual Activities"].'</td>
                  <td>'.$row["Pain / Discomfort"].'</td>
                  <td>'.$row["Anxiety / Depression"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

             $sql = "SELECT * FROM EQ5D5 ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Mobility</th>
                   <th>Self care</th>
                   <th>Usual activities</th>
                   <th>Pain/Discomfort</th>
                   <th>Anxiety/Depression</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>EQ5D5</td>
                  <td>'.$row["Mobility"].'</td>
                  <td>'.$row["Self Care"].'</td>
                  <td>'.$row["Usual Activities"].'</td>
                  <td>'.$row["Pain/Discomfort"].'</td>
                  <td>'.$row["Anxiety/Depression"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM footAndAnkelOutcome ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>




              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>footAndAnkelOutcome</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

           $sql = "SELECT * FROM iHOT12 ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>
                   <th>Q12</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>iHOT12</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

           $sql = "SELECT * FROM IKDC ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>

                   <th>Q9a</th>
                   <th>Q9b</th>
                   <th>Q9c</th>
                   <th>Q9d</th>
                   <th>Q9e</th>
                   <th>Q9f</th>
                   <th>Q9g</th>
                   <th>Q9h</th>
                   <th>Q9i</th>
                   <th>Q10a</th>
                   <th>Q10b</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>IKDC</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9a"].'</td>
                  <td>'.$row["Q9b"].'</td>
                  <td>'.$row["Q9c"].'</td>
                  <td>'.$row["Q9d"].'</td>
                  <td>'.$row["Q9e"].'</td>
                  <td>'.$row["Q9f"].'</td>
                  <td>'.$row["Q9g"].'</td>
                  <td>'.$row["Q9h"].'</td>
                  <td>'.$row["Q9i"].'</td>
                  <td>'.$row["Q10a"].'</td>
                  <td>'.$row["Q10b"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM keenOutcome ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>keenOutcome</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM KOOS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>S1</th>
                   <th>S2</th>
                   <th>S3</th>
                   <th>S4</th>
                   <th>S5</th>
                   <th>S6</th>
                   <th>S7</th>

                   <th>P1</th>
                   <th>P2</th>
                   <th>P3</th>
                   <th>P4</th>
                   <th>P5</th>
                   <th>P6</th>
                   <th>P7</th>
                   <th>P8</th>
                   <th>P9</th>

                   <th>A1</th>
                   <th>A2</th>
                   <th>A3</th>
                   <th>A4</th>
                   <th>A5</th>
                   <th>A6</th>
                   <th>A7</th>
                   <th>A8</th>
                   <th>A9</th>
                   <th>A10</th>
                   <th>A11</th>
                   <th>A12</th>
                   <th>A13</th>
                   <th>A14</th>
                   <th>A15</th>
                   <th>A15</th>
                   <th>A17</th>

                   <th>SP1</th>
                   <th>SP2</th>
                   <th>SP3</th>
                   <th>SP4</th>
                   <th>SP5</th>

                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>

                  <td>KOOS</td>
                  <td>'.$row["S1"].'</td>
                  <td>'.$row["S2"].'</td>
                  <td>'.$row["S3"].'</td>
                  <td>'.$row["S4"].'</td>
                  <td>'.$row["S5"].'</td>
                  <td>'.$row["S6"].'</td>
                  <td>'.$row["S7"].'</td>


                  <td>'.$row["P1"].'</td>
                  <td>'.$row["P2"].'</td>
                  <td>'.$row["P3"].'</td>
                  <td>'.$row["P4"].'</td>
                  <td>'.$row["P5"].'</td>
                  <td>'.$row["P6"].'</td>
                  <td>'.$row["P7"].'</td>
                  <td>'.$row["P8"].'</td>
                  <td>'.$row["P9"].'</td>


                  <td>'.$row["A1"].'</td>
                  <td>'.$row["A2"].'</td>
                  <td>'.$row["A3"].'</td>
                  <td>'.$row["A4"].'</td>
                  <td>'.$row["A5"].'</td>
                  <td>'.$row["A6"].'</td>
                  <td>'.$row["A7"].'</td>
                  <td>'.$row["A8"].'</td>
                  <td>'.$row["A9"].'</td>
                  <td>'.$row["A10"].'</td>
                  <td>'.$row["A11"].'</td>
                  <td>'.$row["A12"].'</td>
                  <td>'.$row["A13"].'</td>
                  <td>'.$row["A14"].'</td>
                  <td>'.$row["A15"].'</td>
                  <td>'.$row["A16"].'</td>
                  <td>'.$row["A17"].'</td>

                  <td>'.$row["SP1"].'</td>
                  <td>'.$row["SP2"].'</td>
                  <td>'.$row["SP3"].'</td>
                  <td>'.$row["SP4"].'</td>
                  <td>'.$row["SP5"].'</td>


                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }
           $sql = "SELECT * FROM MDI ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>MDI</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM MOXFQ ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>
                   <th>Q12</th>
                   <th>Q13</th>
                   <th>Q14</th>
                   <th>Q15</th>
                   <th>Q16</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>MOXFQ</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>
                  <td>'.$row["Q13"].'</td>
                  <td>'.$row["Q14"].'</td>
                  <td>'.$row["Q15"].'</td>
                  <td>'.$row["Q16"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }
           $sql = "SELECT * FROM NAHSR ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                   <th>Q11</th>
                   <th>Q12</th>
                   <th>Q13</th>
                   <th>Q14</th>
                   <th>Q15</th>
                   <th>Q16</th>
                   <th>Q17</th>
                   <th>Q18</th>
                   <th>Q19</th>
                   <th>Q20</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>NAHSR</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>
                  <td>'.$row["Q13"].'</td>
                  <td>'.$row["Q14"].'</td>
                  <td>'.$row["Q15"].'</td>
                  <td>'.$row["Q16"].'</td>
                  <td>'.$row["Q17"].'</td>
                  <td>'.$row["Q18"].'</td>
                  <td>'.$row["Q19"].'</td>
                  <td>'.$row["Q20"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM NAHSRpatientSatisfaction ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>

                     <th>code</th>
                   <th>comment</th>



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>NAHSRpatientSatisfaction</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM NDI ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>NDI</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM NeckAndArmPain ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>NeckAndArmPain</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>

                 <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }
          $sql = "SELECT * FROM ODI ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>ODI</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM OES ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                   <th>Q11</th>
                   <th>Q12</th>

                     <th>code</th>
                   <th>comment</th>




                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>OES</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>


                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM OHS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>
                   <th>Q12</th>

                     <th>code</th>
                   <th>comment</th>



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>OHS</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }


           $sql = "SELECT * FROM OKSandAandP ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>

                     <th>code</th>
                   <th>comment</th>



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>OKSandAandP</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>


                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }


    $sql = "SELECT * FROM OSI ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                   <th>Q11</th>
                   <th>Q12</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>OSI</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM OxfordKeenScore ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                    <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>
                   <th>Q12</th>

                     <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>OxfordKeenScore</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>
                  <td>'.$row["Q12"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }
          $sql = "SELECT * FROM painVAS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>painVAS</td>
                  <td>'.$row["Q1"].'</td>


                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

          $sql = "SELECT * FROM PEM ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>PEM</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

           $sql = "SELECT * FROM QDASH ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>
                   <th>Q10</th>
                   <th>Q11</th>

                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>QDASH</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>
                  <td>'.$row["Q10"].'</td>
                  <td>'.$row["Q11"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }

           $sql = "SELECT * FROM SAFAS ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>S1</th>
                   <th>S2</th>
                   <th>S3</th>
                   <th>S4</th>
                   <th>S5</th>
                   <th>S6</th>
                   <th>S7</th>
                   <th>S8</th>
                   <th>S9</th>


                   <th>P1</th>
                   <th>P2</th>
                   <th>P3</th>
                   <th>P4</th>
                   <th>P5</th>
                   <th>P6</th>
                   <th>P7</th>
                   <th>P8</th>
                   <th>P9</th>
                   <th>P10</th>
                   <th>P11</th>
                   <th>P12</th>
                   <th>P13</th>

                   <th>DL1</th>
                   <th>DL2</th>
                   <th>DL3</th>
                   <th>DL4</th>
                   <th>DL5</th>
                   <th>DL6</th>
                   <th>DL7</th>
                   <th>DL8</th>

                   <th>S1</th>
                   <th>S2</th>
                   <th>S3</th>
                   <th>S4</th>
                   <th>S5</th>
                   <th>S6</th>
                   <th>S7</th>
                   <th>S8</th>
                   <th>S9</th>
                   <th>S10</th>
                   <th>S11</th>
                   <th>S12</th>
                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>

                  <td>SAFAS</td>
                  <td>'.$row["S1"].'</td>
                  <td>'.$row["S2"].'</td>
                  <td>'.$row["S3"].'</td>
                  <td>'.$row["S4"].'</td>
                  <td>'.$row["S5"].'</td>
                  <td>'.$row["S6"].'</td>
                  <td>'.$row["S7"].'</td>
                  <td>'.$row["S8"].'</td>
                  <td>'.$row["S9"].'</td>

                  <td>'.$row["P1"].'</td>
                  <td>'.$row["P2"].'</td>
                  <td>'.$row["P3"].'</td>
                  <td>'.$row["P4"].'</td>
                  <td>'.$row["P5"].'</td>
                  <td>'.$row["P6"].'</td>
                  <td>'.$row["P7"].'</td>
                  <td>'.$row["P8"].'</td>
                  <td>'.$row["P9"].'</td>
                  <td>'.$row["P10"].'</td>
                  <td>'.$row["P11"].'</td>
                  <td>'.$row["P12"].'</td>
                  <td>'.$row["P13"].'</td>



                  <td>'.$row["DL1"].'</td>
                  <td>'.$row["DL2"].'</td>
                  <td>'.$row["DL3"].'</td>
                  <td>'.$row["DL4"].'</td>
                  <td>'.$row["DL5"].'</td>
                  <td>'.$row["DL6"].'</td>
                  <td>'.$row["DL7"].'</td>
                  <td>'.$row["DL8"].'</td>

                  <td>'.$row["SS1"].'</td>
                  <td>'.$row["SS2"].'</td>
                  <td>'.$row["SS3"].'</td>
                  <td>'.$row["SS4"].'</td>
                  <td>'.$row["SS5"].'</td>
                  <td>'.$row["SS6"].'</td>
                  <td>'.$row["SS7"].'</td>
                  <td>'.$row["SS8"].'</td>
                  <td>'.$row["SS9"].'</td>
                  <td>'.$row["SS10"].'</td>
                  <td>'.$row["SS11"].'</td>
                  <td>'.$row["SS12"].'</td>

                 <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }


    $sql = "SELECT * FROM spineOutcome ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                     <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>spineOutcome</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>



                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }
     }


           $sql = "SELECT * FROM UCLAacticity ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>CurrentActivityLevel</th>

                   <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>UCLAacticity</td>
                  <td>'.$row["CurrentActivityLevel"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }

     }


    $sql = "SELECT * FROM URAM ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>

                   <th>code</th>
                   <th>comment</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>URAM</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }

     }

          $sql = "SELECT * FROM VISAA ";
  $result =    $db->query($sql);

    if( mysqli_num_rows($result) >0 )
     {

         $output .='
          <table class "table" bordered ="1" >
              <tr>
              <th>Questionnaire</th>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8A</th>
                   <th>Q8B</th>
                   <th>Q18C</th>

                <th>code</th>
                   <th>comment</th>


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>


              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {

             $output .= '
             <tr>


                  <td>VISAA</td>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8A"].'</td>
                  <td>'.$row["Q8B"].'</td>
                  <td>'.$row["Q8C"].'</td>

                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>



             </tr>

             ';

         }


             $output .= '</table>';



         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = dataBase.xls ");

             echo $output;
     }

     }
}
?>
