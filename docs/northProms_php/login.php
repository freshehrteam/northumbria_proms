
<!-- in order to runing the codes, users need to set up the values of $servername,
$name,$pw,$dbName --?>


<?php
$servername = "localhost";  //server name
    $name = "root";    //user name
    $pw = "msRoot";   //password
    $dbName = "north_proms"; //database name
// Create connection
$db = new mysqli($servername, $name, $pw, $dbName);

$password = $username = "";

if(isset($_POST['login'])){
    session_unset();
    session_start();


     $username = mysql_real_escape_string($_POST['username']);

         $password = mysql_real_escape_string($_POST['password']);



    $password = md5($password);//we hashed our password when registration
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['message'] = "you are now logged in";
        $_SESSION['username'] = $username;
        header("location: home.php");//redirect to home page
    }
    else{
          $_SESSION['message'] = "username/password incorrect";


    }


}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

          <!-- Website css style -->
      <link rel="stylesheet" href="Login.css">

  <title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">

  </head>


  <body>

<div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 face="aria-hidden">Login</h1>
                    <hr />
                  </div>
              </div>
        <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="login.php">


         <br> <form action="login.php" method="post">
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Username"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
                </div>
              </div>
            </div>
                      <?php echo "Wrong username or password"; ?>

      <input type="submit" name= "login" value="login">
            <button>
						 <a href="register.html">Sign up</a>
                         </button>


  </form>
</div>

</body>

</html>
