<!-- //change server name, username, password,databasename -->


<?php
$servername = "localhost";  //server name 
    $name = "keronglong";    //user name 
    $pw = "ronglongke0754";   //password
    $dbName = "javaProject"; //database name 
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

$output = "";

if(isset($_POST["export_excel"]))
{
    
    
    $sql = "SELECT * FROM KOOS ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = KOOS.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>