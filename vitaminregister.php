<?php require("header.php");?>
<?php require("sec_nav.php");?>

<!-- backend code  -->
<?php
  if(isset($_POST["Register"])){
    $vitaminname= $_POST["vitaminname"];
    $ageid = $_POST["yid"];
    $amount = $_POST["amount"];

    $statement = $connection->prepare('INSERT INTO `vitamin`(`VID`, `VName`, `YID`, `AmountPerDay`) VALUES (NULL,?,?,?)');

    $statement->bind_param('sis',$vitaminname,$ageid,$amount);

    if($statement->execute()){
      echo "<script>alert('Register Successful');location.assign('adminindex.php');</script>" ;
    }else{
      echo "<script>alert('Failed!');</script>" ;
    }
  }

?>

<!-- Frontend Code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register_nutrition.css">
  <title>Document</title>
</head>
<body>

<!-- Register Vitamin -->

<section class="register_nutrition">
  <div class="container">    
    <div class="bgimg">
      <img src="bg_img/edit_or_del1.jpg" alt="" class="img-fluid shadow-lg">
    </div>

    <div class="register_Form">
      <form class="card shadow" method="post">
        <div class="card-header bg-brand text-white">
          <h5 style="text-align: center;">Please Register Vitamin Sources</h5>
        </div>
        <div class="card-body">
          <input type="text" name="vitaminname" id="inputvitaminname" class="form-control mb-3" placeholder="Vitamin Name" required >
          <select name="yid" id="inputyid" class="form-control mb-3" required>
            <?php
                $ages = $connection->prepare('SELECT `YID`, `YName` FROM `age` ');
                $ages->execute();
                $ages->bind_result($age_YID,$age_YName);
                while($ages->fetch()){
            ?>
              <option value="<?php echo $age_YID;?>"><?php echo $age_YName;?></option>
              <?php } $ages->close(); ?>
          </select>
              
          <input type="text" name="amount" id="inputamount" class="form-control mb-3" placeholder="Amount Per Day" required>
          <hr>
          
          <button class="btn btn-block" type="submit" name="Register">Register</button>
          <a href="adminindex.php" class="btn btn-block">Back</a>
        </div>
      </form>
    </div>
  </div>
</section>

</body>
</html>
<?php require("footer_fixedbottom2.php");?>
