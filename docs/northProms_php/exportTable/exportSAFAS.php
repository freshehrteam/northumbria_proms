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
    
    
    $sql = "SELECT * FROM SAFAS ";
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = SAFAS.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>