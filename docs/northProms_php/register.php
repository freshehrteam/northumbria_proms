
<!-- in order to runing the codes, users need to set up the values of $servername,
$name,$pw,$dbName --?>


<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$password = $username =$email= $password2="";

if(isset($_POST['register'])){
    session_start();

   $username = $_POST['username'];

     $email = $_POST['email'];

     $password = $_POST['password'];

     $password2 = $_POST['password2'];



    if($password == $password2){
        //create user
        $password = md5($password);//has password for security reason

  $sql = "INSERT INTO user(username,email,password ) VALUES ('$username','$email','$password')";
  $db->query($sql);

      $_SESSION['message']="Welcome";
        $_SESSION['username'] = $username;
        header("location:home.php");//redirect to the home page
    }else{
        //false
        $_SESSION['message']="The two passwords do not match";
        header("location:register.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
     </head>

    <body>
    <h1>Register</h1>


        <form action="register.php" method="post">
              Username: <input type="text" name="username" required>*<br>
              Email:<input tyoe = "email" name = "email" required>*<br>
              Password: <input type="password" name="password" required>* <br>
            Comfirm Password: <input type="password" name="password2" required>*<br>
              <input type="submit" name= "register" value="Register">
</form>
        <p><span class="error">* required field.</span></p>

    </body>
</html>
