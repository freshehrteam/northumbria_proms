


<?php
//change server name, username, password,databasename

$servername = "localhost";  //server name 
    $name = "keronglong";    //user name 
    $pw = "ronglongke0754";   //password
    $dbName = "javaProject"; //database name 
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

$output = "";

if(isset($_POST["export_excel"]))
{
    
    
    $sql = "SELECT * FROM AOS ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = AOS.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>