<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="nav.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-brand fixed-top">
    <!-- <nav class="navbar navbar-expand-md navbar-light fixed-top"style="background-color: #e3f2fd;"> -->
    <div class="container">
      <a class="navbar-brand logo" href="#">Precious Nutrition</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lists</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="vitaminlist_user.php">Vitamin Sources Lists</a>
                <a class="dropdown-item" href="minerallist_user.php">Mineral Sources Lists</a>
                <a class="dropdown-item" href="othernutritionlist_user.php">Other Nutrition Sources Lists</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="nutrition.php">Nutritions<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="blogs.php">Blogs<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactus.php">Contact Us<span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <!-- <form class="ml-auto">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Register</button>
          </form> -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="account.php">Account</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>
            </li>
          </ul>
        </div>
    </div>
  </nav>
</body>
</html>