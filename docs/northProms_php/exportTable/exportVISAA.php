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
    
    
    $sql = "SELECT * FROM VISAA ";
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
         header("Content-Disposition: attachment; filename = VISAA.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>