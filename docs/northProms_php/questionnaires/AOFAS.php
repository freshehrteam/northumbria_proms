<!-- store data in to this questionnaire' table in database -->
<!-- in order to runing the codes, users need to set up the values of $servername,
$name,$pw,$dbName --?


<?php
$servername = "localhost";  //server name 
    $name = "keronglong";    //user name 
    $pw = "ronglongke0754";   //password
    $dbName = "javaProject"; //database name 
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

session_start();

$operation = $_SESSION['operation'];
$hospitalNumber = $_SESSION['hospitalNumber'];
if(isset($_POST['submit'])){
    
    $q1 =$_POST['q1'];
    $q2 =$_POST['q2'];
    $q3 =$_POST['q3'];
    $q4 =$_POST['q4'];
    $day = $_POST['day'];
    $month =$_POST['month'];
    $year = $_POST['year'];
    $day="$year-$month-$day";
    $comment = $_POST['comment'];
    
        $sql = "INSERT INTO `AOFAS`(`P1`, `F1`, `F2`, `F3`, `hospitalNumber`, `answeredDate`,`code`,`comment`) VALUES ($q1,$q2,$q3,$q4,$hospitalNumber,'$day','$operation','$comment');";
  $db->query($sql);
    
    
    
   header ("location:../patientInfo.php");
}




?>
<!DOCTYPE html>
<html>
<head>
    <title>AOFAS</title>
     </head>
    
    <body>
    <h1>AOFAS
</h1>
    

        <form action="AOFAS.php" method="post">
        
            
            
            <p>Q1.The pain you are having:</p>
<div class="checkbox">
  <label><input type="checkbox" name = "q1" value="1">None

</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name = "q1" value="2">Mild/Occasional

</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" name = "q1" value="3" > Moderate/Daily

</label>
</div>
            <div class="checkbox ">
  <label><input type="checkbox" name = "q1" value="4" >Severe


</label>
</div>
          
     
      
      
      <p>Q2.Activity limitations/support  requirements:  </p>
<div class="checkbox">
  <label><input type="checkbox" name = "q2" value="1">None

</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name = "q2" value="2">Mild/Occasional

</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" name = "q2" value="3" > Moderate/Daily

</label>
</div>
            <div class="checkbox ">
  <label><input type="checkbox" name = "q2" value="4" >Severe


</label>
</div>
       
      
      
      <p>Q3.Walking (Maximum walking distance in blocks (1 block=100-200 yards))
</p>
<div class="checkbox">
  <label><input type="checkbox" name = "q3" value="1">Greater than 6
			
</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name = "q3" value="2"> 4-6	
</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" name = "q3" value="3" >1-3		

</label>
</div>
            <div class="checkbox ">
  <label><input type="checkbox" name = "q3" value="4" >		less than 1


    
      
      
      <p>Q4.Walking surfaces:  	</p>
<div class="checkbox">
  <label><input type="checkbox" name = "q4" value="1"> No difficulty on any surface

</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name = "q4" value="2">Some difficulty on uneven terrain, stairs, inclines, ladders

</label>
</div>
<div class="checkbox ">
  <label><input type="checkbox" name = "q4" value="3" >	Severe difficulty on uneven terrain, stairs, ladders

                       <P>Anwering date:</P>       Day
<select name='day' id='dayddl'>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>


Month
<select name='month' id='monthddl'>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>


Year
<select name='year' id='blah'>
<option value='0'>0</option>
<option value='1947'>1947</option>
<option value='1948'>1948</option>
<option value='1949'>1949</option>
<option value='1950'>1950</option>
<option value='1951'>1951</option>
<option value='1952'>1952</option>
<option value='1953'>1953</option>
<option value='1954'>1954</option>
<option value='1955'>1955</option>
<option value='1956'>1956</option>
<option value='1957'>1957</option>
<option value='1958'>1958</option>
<option value='1959'>1959</option>
<option value='1960'>1960</option>
<option value='1961'>1961</option>
<option value='1962'>1962</option>
<option value='1963'>1963</option>
<option value='1964'>1964</option>
<option value='1965'>1965</option>
<option value='1966'>1966</option>
<option value='1967'>1967</option>
<option value='1968'>1968</option>
<option value='1969'>1969</option>
<option value='1970'>1970</option>
<option value='1971'>1971</option>
<option value='1972'>1972</option>
<option value='1973'>1973</option>
<option value='1974'>1974</option>
<option value='1975'>1975</option>
<option value='1976'>1976</option>
<option value='1977'>1977</option>
<option value='1978'>1978</option>
<option value='1979'>1979</option>
<option value='1980'>1980</option>
<option value='1981'>1981</option>
<option value='1982'>1982</option>
<option value='1983'>1983</option>
<option value='1984'>1984</option>
<option value='1985'>1985</option>
<option value='1986'>1986</option>
<option value='1987'>1987</option>
<option value='1988'>1988</option>
<option value='1989'>1989</option>
<option value='1990'>1990</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
<option value='1993'>1993</option>
<option value='1993'>1993</option>
<option value='1994'>1994</option>
<option value='1995'>1995</option>
<option value='1993'>1993</option>
</select>
   <br>  <br> <input type="submit" name= "submit" value="submit">
</form>

   
    </body>
</html>