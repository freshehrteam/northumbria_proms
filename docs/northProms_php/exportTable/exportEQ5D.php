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
    
    
    $sql = "SELECT * FROM EQ5D ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
              <tr>
              
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
                  
                  
                  
                  <td>'.$row["howIsHealth"].'</td>
                  <td>'.$row["code"].'</td>
                  <td>'.$row["comment"].'</td>
                  <td>'.$row["hospitalNumber"].'</td>                 
                  <td>'.$row["answeredDate"].'</td>
            
                                
             
             </tr>
        
             ';
             
         }
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = EQ5Dvas.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>