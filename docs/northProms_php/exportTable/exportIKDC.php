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
    
    
    $sql = "SELECT * FROM IKDC ";
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = IKDC.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>