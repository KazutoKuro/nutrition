
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
      echo "<script>alert('Login Successful');location.assign('adminindex.php');</script>" ;
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

    $statement = $connection->prepare('INSERT INTO `user`(`uid`, `user`, `email`, `password`, `phone`) VALUES (NULL,?,?,?,?)');
    $statement->bind_param('ssss',$username,$email,$password,$phone);

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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="account.css" />
  <title>Precious Nutrition</title>
</head>
<body>

<!-- Frontend Code for SignIn & SignUp -->

<div class="account">
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="inputEmail" placeholder="Email" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="inputPassword" placeholder="Password" required/>
          </div>

          <button class="accountbtn btn-block" type="submit" name="signin">Login</button>
          <a href="home.php" class="backbtn btn-block">Back</a>

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="User Name" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" name="phone" placeholder="Phone Number" required/>
          </div>
          <button class="accountbtn" type="submit" name="signup">Sign up</button>

          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            To keep connected with us Please sign up with your personal information & see what you are looking for
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="bg_img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
          Enter your personal details and get in touch with us to know what it takes to create the type of nutrition 
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="bg_img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
</div>

    <script src="account.js"></script>
  </body>
</html>
