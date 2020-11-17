<?php require("header.php") ?>
<?php require("nav.php");?>


<!-- backend code Sign in for Admin and User -->
<?php
include("mysqlconnection.php");
  if(isset($_POST["signin"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $statement = $connection->prepare('SELECT `uid` FROM `admin` WHERE `email`=? AND `password`=?'  );
    $statement->bind_param('ss',$email,$password);
    $statement->execute();
    $statement->bind_result($id);
    if($statement->fetch()){
      $_SESSION['id']=$id;  
      echo "<script>alert('Admin Login Successful');location.assign('adminindex.php');</script>" ;
    }
  }

  if(isset($_POST["signin"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $statement = $connection->prepare('SELECT `uid` FROM `user` WHERE `email`=? AND `password`=?'  );
    $statement->bind_param('ss',$email,$password);
    $statement->execute();
    $statement->bind_result($id);
    if($statement->fetch()){
    $_SESSION['id']=$id;  
    echo "<script>alert('Login Successful');location.assign('index.php');</script>" ;
    }
    else{
      echo "<script>alert('Incorrect User!');</script>" ;
    }
  }
?>


<!-- backend code Sign up-->

<?php
include("mysqlconnection.php");
  if(isset($_POST["signup"])){
    $username= $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $statement = $connection->prepare('INSERT INTO `user`(`uid`, `username`, `password`, `email`, `phone`) VALUES (NULL,?,?,?,?)');
    $statement->bind_param('ssss',$username,$password,$email,$phone);

    if($statement->execute()){
      echo "<script>alert('Successful Sign Up'); location.assign('account.php');</script>" ;
    }else{
      echo "<script>alert('Failed!');</script>" ;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="account.css">    
</head>
<body>

  <section class="account">
      <div class="container" id="container">
          <div class="form-container sign-up-container">
              <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                  <h3>Create Account</h3>
                  <div class="social-container">
                      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <span>or use your email for registration</span>

                  <input type="text" name="username" placeholder="Name" autofocus required/>

                  <input type="email" name="email" placeholder="Email" required/>

                  <input type="password" name="password" placeholder="Password" required/>

                  <input type="text" name="phone" placeholder="Phone Number" required/>

                  <button type="submit" name="signup">Sign Up</button>
              </form>
          </div>
          <div class="form-container sign-in-container">
              <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                  <h3>Sign in</h3>
                  <div class="social-container">
                      <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <span>or use your account</span>

                  <input type="email" name="email" id="inputEmail" placeholder="Email" autofocus required />
            
                  <input type="password" name="password" id="inputPassword" placeholder="Password" required/>

                  <a href="#">Forgot your password?</a>

                  <button href="index.php" type="submit" name="signin">Sign In</button>
              </form>
          </div>
          <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <h3>Welcome Back!</h3>
                      <p>To keep connected with us please login with your personal info</p>
                      <button class="ghost" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                      <h3>Hello, Welcome from Paradise!</h1>
                      <p>Enter your personal details and start to order</p>
                      <button class="ghost" id="signUp">Sign Up</button>
                  </div>
              </div>
          </div>
      </div>
  </section> 

  <div>
        <nav class="navbar navbar-light bg-brand-secondary d-flex justify-content-center fixed-bottom">
                <span class="navbar-brand mb-0 text-white">
                    &copy;
                    <?php echo date("Y");?>
                </span>
        </nav>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="account.js"></script>
</body>
</html>

