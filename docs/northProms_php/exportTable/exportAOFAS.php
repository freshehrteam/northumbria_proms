


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
    
    
    $sql = "SELECT * FROM AOFAS ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
              <tr>
              
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
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = AOFAS.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>