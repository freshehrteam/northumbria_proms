<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);


    session_start();


$questionnaires = array();
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




/*-------------------------------------------------------------------------------------*/
// a funtion which generates tables for different questionnaires
function generateTable($tableName,$hospitalNumber){

    $output = "";
    $servername = "localhost";  //server name
    $name = "keronglong";    //user name
    $pw = "ronglongke0754";   //password
    $dbName = "javaProject"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

        switch ($tableName) {
/*-------------------------------------------------------------------------------------*/

            case "EQ5D5":
                $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>Mobility</th>
                   <th>Self care</th>
                   <th>Usual activities</th>
                   <th>Pain/Discomfort</th>
                   <th>Anxiety/Depression</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
                 </tr>
                 ";

       $sql = "SELECT * FROM EQ5D5 where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);

   while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                     <td>'.$row["Mobility"].'</td>
                  <td>'.$row["Self Care"].'</td>
                  <td>'.$row["Usual Activities"].'</td>
                  <td>'.$row["Pain/Discomfort"].'</td>
                  <td>'.$row["Anxiety/Depression"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>

             ';
         }

$output .="</table>";

                echo $output;
                     break;



/*-------------------------------------------------------------------------------------*/

            case "AOFAS":
                       $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                     <th>P1</th>
                   <th>F1</th>
                   <th>F2</th>
                   <th>F3</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
                 </tr>
                 ";

       $sql = "SELECT * FROM AOFAS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);

   while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["P1"].'</td>
                  <td>'.$row["F1"].'</td>
                  <td>'.$row["F2"].'</td>
                  <td>'.$row["F3"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>

             ';
         }

$output .="</table>";

                echo $output;
                     break;


/*-------------------------------------------------------------------------------------*/

            case "AOS":
                $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>                                       <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM AOS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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
                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
            <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;

        break;


/*-------------------------------------------------------------------------------------*/


            case "ATRS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                   <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM ATRS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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


                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/

            case "BackAndLegPain":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM BackAndLegPain where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                 <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/
            case "BOSTON":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                   <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM BOSTON where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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
                  <td>'.$row["hospitalNumber"].'</td><td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;




/*-------------------------------------------------------------------------------------*/
            case "COFAS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>P1</th>
                   <th>P2</th>
                   <th>P5</th>
                   <th>D1</th>
                   <th>D3</th>
                   <th>D6</th>
                   <th>D7</th>
                   <th>D9</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM COFAS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                 <td>'.$row["P1"].'</td>
                  <td>'.$row["P2"].'</td>
                  <td>'.$row["P5"].'</td>
                  <td>'.$row["D1"].'</td>
                  <td>'.$row["D3"].'</td>
                  <td>'.$row["D6"].'</td>
                  <td>'.$row["D7"].'</td>
                  <td>'.$row["D9"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/
            case "EQ5D":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                    <th>how good or bad your health is TODAY</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM EQ5D where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["howIsHealth"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/
            case "EQ5D3":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>Mobility</th>
                   <th>Self care</th>
                   <th>Usual activities</th>
                   <th>Pain/Discomfort</th>
                   <th>Anxiety/Depression</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM EQ5D3 where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Mobility"].'</td>
                  <td>'.$row["Self-Care"].'</td>
                  <td>'.$row["Usual Activities"].'</td>
                  <td>'.$row["Pain / Discomfort"].'</td>
                  <td>'.$row["Anxiety / Depression"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td><td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/
            case "footAndAnkelOutcome":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                              <th>Q1</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM footAndAnkelOutcome where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;



/*-------------------------------------------------------------------------------------*/
            case "iHOT12":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                   <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM iHOT12 where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;





/*-------------------------------------------------------------------------------------*/


           case "IKDC":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM IKDC where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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

                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;


/*-------------------------------------------------------------------------------------*/


           case "keenOutcome":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM keenOutcome where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "KOOS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM KOOS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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

                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;


/*-------------------------------------------------------------------------------------*/


           case "MDI":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM MDI where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;
/*-------------------------------------------------------------------------------------*/


           case "MOXFQ":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM MOXFQ where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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



                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;
/*-------------------------------------------------------------------------------------*/


           case "NAHSR":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>


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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM NAHSR where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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




                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;
/*-------------------------------------------------------------------------------------*/


           case "NAHSRpatientSatisfaction":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM NAHSRpatientSatisfaction where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;
/*-------------------------------------------------------------------------------------*/


           case "NDI":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                   <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM NDI where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "NeckAndArmPain":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

                   <th>Q1</th>
                   <th>Q2</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM NeckAndArmPain where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "ODI":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                  <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM ODI where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OES":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                   <th>comment</th>


           </tr>
                 ";

  $sql = "SELECT * FROM OES where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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




                  <td>'.$row["hospitalNumber"].'</td>                     <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OHS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                                       <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM OHS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OKSandAandP":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                    <th>comment</th>



                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
           </tr>
                 ";

  $sql = "SELECT * FROM OKSandAandP where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>



                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OSI":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

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
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM OSI where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OSS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM OSS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "OxfordKeenScore":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM OxfordKeenScore where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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



                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "painVAS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>

                   <th>Q1</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM painVAS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Q1"].'</td>

                 <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                 <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "PEM":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM PEM where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "QDASH":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM QDASH where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

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

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "SAFAS":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM SAFAS where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>


             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;


/*-------------------------------------------------------------------------------------*/


           case "spineOutcome":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                   <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM spineOutcome where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>



                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>
             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "TegnerActivity":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                    <th>ACTIVITY LEVEL BEFORE INJURY</th>
                   <th>CURRENT ACTIVITY LEVEL</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM TegnerActivity where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

                  <td>'.$row["activityLevelBeforeInjury"].'</td>
                   <td>'.$row["currentActivityLevel"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>



             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;
/*-------------------------------------------------------------------------------------*/


           case "UCLAacticity":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
           <th>CurrentActivityLevel</th>
                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>


           </tr>
                 ";

  $sql = "SELECT * FROM UCLAacticity where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>

                  <td>'.$row["CurrentActivityLevel"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "URAM":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
                     <th>Q1</th>
                   <th>Q2</th>
                   <th>Q3</th>
                   <th>Q4</th>
                   <th>Q5</th>
                   <th>Q6</th>
                   <th>Q7</th>
                   <th>Q8</th>
                   <th>Q9</th>

                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>
           </tr>
                 ";

  $sql = "SELECT * FROM URAM where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
                  <td>'.$row["Q1"].'</td>
                  <td>'.$row["Q2"].'</td>
                  <td>'.$row["Q3"].'</td>
                  <td>'.$row["Q4"].'</td>
                  <td>'.$row["Q5"].'</td>
                  <td>'.$row["Q6"].'</td>
                  <td>'.$row["Q7"].'</td>
                  <td>'.$row["Q8"].'</td>
                  <td>'.$row["Q9"].'</td>

                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>


             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

/*-------------------------------------------------------------------------------------*/


           case "VISAA":
                     $output .="
                <h2>$tableName</h2>
          <table>
           <tr>
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


                   <th>hospitalNumber</th>
                   <th>answeredDate</th>
                    <th>comment</th>

           </tr>
                 ";

  $sql = "SELECT * FROM VISAA where hospitalNumber ='$hospitalNumber'";
  $result =    $db->query($sql);
 while ($row = mysqli_fetch_array($result))
         {
                  $output .= '
             <tr>
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


                  <td>'.$row["hospitalNumber"].'</td>                                      <td>'.$row["answeredDate"].'</td>
                  <td>'.$row["comment"].'</td>

             </tr>
           ';
         }

$output .="</table>";

                echo $output;
        break;

        break;


    default:
        echo "Error";


        }

    }



/*-------------------------------------------------------------------------------------*/

$hospitalNumber =$_SESSION['hospitalNumber'];
$n = 0;
while($n<$arrlength){
            generateTable($questionnaires[$n], $hospitalNumber);
    $n  = $n + 1;
}





?>


<!DOCTYPE html>
<html>
<head>
    <title>Patient result</title>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    </head>

    <body>



        </body>
</html>
