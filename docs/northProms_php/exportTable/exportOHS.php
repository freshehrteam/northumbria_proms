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
    
    
    $sql = "SELECT * FROM OHS ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = OHS.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>