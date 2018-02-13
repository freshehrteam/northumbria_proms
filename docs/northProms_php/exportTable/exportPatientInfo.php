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
    
    
    $sql = "SELECT * FROM patientInfo ";
  $result =    $db->query($sql);
    
    if( mysqli_num_rows($result) >0 )
     {
         
         $output .='
          <table class "table" bordered ="1" >
              <tr>
              
                   <th>Title</th>
                   <th>Firstname</th>
                   <th>Surname</th>
                   <th>Middle name</th>
                   <th>Forename</th>
                   <th>Hospital number</th>
                   <th>NHS number</th>
                   <th>Email</th>
                   <th>Gender</th>
                   <th>D.O.B</th>
                   <th>Operation</th>
                   <th>Date of Operation</th>
                   <th>Side</th>
            
                   

              </tr>
';
         while ($row = mysqli_fetch_array($result))
         {
             
             $output .= '
             <tr>
                  
                  
                  
                  <td>'.$row["title"].'</td>
                  <td>'.$row["firstname"].'</td>
                  <td>'.$row["surname"].'</td>
                  <td>'.$row["middlename"].'</td>
                  <td>'.$row["forename"].'</td>                                      <td>'.$row["hospitalNumber"].'</td>
                  <td>'.$row["nhsNumber"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["gender"].'</td>
                  <td>'.$row["dateOfBirth"].'</td>
                  <td>'.$row["operation"].'</td>
                  <td>'.$row["dateOfOperation"].'</td>
                  <td>'.$row["side"].'</td>
                  
                  
             
                  
            
                                
             
             </tr>
        
             ';
             
         }
         
         $output .= '</table>';
         
         header("Content-Type: application/xls ");
         header("Content-Disposition: attachment; filename = patinetInfo.xls ");
             
             echo $output;
         
         
         
         
     } 

}

?>