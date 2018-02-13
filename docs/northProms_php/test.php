<html>
   <head>
      <title>Online PHP Script Execution</title>
   </head>

   <body>

      <?php
      $servername = "localhost";  //server name
          $name = "root";    //user name
          $pw = "msRoot";   //password
          $dbName = "north_proms"; //database name
      // Create connection
      $db = new mysqli($servername, $name, $pw, $dbName);

       echo "<h1>Hello, PHP!</h1>";
       echo "<h1>$db->stat</h1>";

      if($db->connect_errno > 0){
          die('Unable to connect to database [' . $db->connect_error . ']');
             echo "<h2>'Unable to connect to database [' . $db->connect_error . ']'</h2>";
      }

      ?>

   </body>
</html>
