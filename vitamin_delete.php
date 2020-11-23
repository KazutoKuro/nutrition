<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
  if(isset($_POST["Delete"])){
    $vitaminid=$_POST["vid"];
    $vitaminname= $_POST["vitaminname"];
    $ageid = $_POST["yid"];
    $amount = $_POST["amount"];

    $statement = $connection->prepare('DELETE FROM `vitamin` WHERE `VID`=?');
    $statement->bind_param('i',$vitaminid);
    if($statement->execute()){
      echo "<script>alert('Deleting Successful');location.assign('vitaminlist.php');</script>" ;
    }else{
      echo "<script>alert('Failed!');</script>" ;
    }
  }

  if(isset($_GET["id"])){
    $id=$_GET["id"];
    $vitamin = $connection->prepare('SELECT `VID`, `VName`, `YID`, `AmountPerDay` FROM `vitamin` WHERE VID=?');
    $vitamin->bind_param('i',$id);
    $vitamin->execute();
    $vitamin->bind_result($vitamin_VID, $vitamin_VName, $vitamin_YID, $vitamin_AmountPerDay);
    $vitamin->fetch();
    $vitamin->close();
  }else{
    echo "<script>location.assign('vitaminlist.php');</script>" ;
  }

?>

<!-- Frontend Code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="del_nutrition.css">
  <title>Document</title>
</head>
<body>

<!-- Deleting Vitamin -->

<section class="del_nutrition">
  <div class="container">    
    <div class="bgimg">
      <img src="bg_img/edit_or_del1.jpg" alt="" class="img-fluid shadow-lg">
    </div>

    <div class="del_Form">
        <form class="card shadow" method="post">
          <div class="card-header bg-brand text-white">
            <h5 >Deleting Viatmin Sources</h5>
          </div>
          <div class="card-body">
              <input type="hidden" name="vid" value="<?php echo $vitamin_VID;?>" required>
              <input type="text" name="vitaminname" value="<?php echo $vitamin_VName;?>" id="inputvitaminname" class="form-control mb-3" placeholder="Vitamin Name" required >
              <select name="yid" id="inputyid" class="form-control mb-3" required>
                <?php
                    $ages = $connection->prepare('SELECT `YID`, `YName` FROM `age` ');
                    $ages->execute();
                    $ages->bind_result($age_YID,$age_YName);
                    while($ages->fetch()){
                ?>
                  <option value="<?php echo $age_YID;?>"
                      <?php echo $age_YID == ($vitamin_VID) ? 'selected' : '' ; ?>
                  ><?php echo $age_YName;?></option>
                  <?php } $ages->close(); ?>
              </select>
        
              <input type="text" name="amount" value="<?php echo $vitamin_AmountPerDay;?>" id="inputamount" class="form-control mb-3" placeholder="Amount Per Day" required>
              <hr>
            
            <button class="btn btn-block" type="submit" name="Delete">Delete</button>
            <a href="vitaminlist.php" class="btn btn-block">Back</a>
          </div>
        </form>
    </div>
  </div>
</section>

</body>
</html>
<?php require("footer_fixedbottom2.php");?>


