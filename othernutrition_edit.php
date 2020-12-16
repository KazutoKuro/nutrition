<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
  if(isset($_POST["Edit"])){
    $othernutritionid=$_POST["nid"];
    $othernutritionname= $_POST["othernutritionname"];
    $ageid = $_POST["yid"];
    $amount = $_POST["amount"];

    $statement = $connection->prepare('UPDATE `othernutrition` SET `NName`=?,`YID`=?,`AmountPerDay`=? WHERE `NID`=?');

    $statement->bind_param('sisi',$othernutritionname,$ageid,$amount,$othernutritionid);

    if($statement->execute()){
      echo "<script>alert('Editing Successful');location.assign('othernutritionlist.php');</script>" ;
    }else{
      echo "<script>alert('Failed!');</script>" ;
    }
  }

  if(isset($_GET["id"])){
    $id=$_GET["id"];
    $othernutrition = $connection->prepare('SELECT `NID`, `NName`, `YID`, `AmountPerDay` FROM `othernutrition` WHERE NID=?');
    $othernutrition->bind_param('i',$id);
    $othernutrition->execute();
    $othernutrition->bind_result($othernutrition_NID, $othernutrition_NName, $othernutrition_YID, $othernutrition_AmountPerDay);
    $othernutrition->fetch();
    $othernutrition->close();
  }else{
    echo "<script>location.assign('othernutritionlist.php');</script>" ;
  }

?>

<!-- Frontend Code -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css_admin/edit_nutrition.css">
  <title>Document</title>
</head>
<body>

<!-- Editing Other Nutrition Sources -->

<section class="edit_nutrition">
  <div class="container">    
    <div class="bgimg">
      <img src="bg_img/edit_or_del3.jpg" alt="" class="img-fluid shadow-lg">
    </div>

    <div class="edit_Form">
      <form class="card shadow" method="post">
        <div class="card-header bg-brand text-white">
          <h5 style="text-align: center;">Please Edit Nutritioin Sources</h5>
        </div>
        <div class="card-body">
          <input type="hidden" name="nid" value="<?php echo $othernutrition_NID;?>" required>
          <input type="text" name="othernutritionname" value="<?php echo $othernutrition_NName;?>" id="inputmineralname" class="form-control mb-3" placeholder="Nutrition Name" required >
          <select name="yid" id="inputyid" class="form-control mb-3" required>
            <?php
                $ages = $connection->prepare('SELECT `YID`, `YName` FROM `age` ');
                $ages->execute();
                $ages->bind_result($age_YID,$age_YName);
                while($ages->fetch()){
            ?>
              <option value="<?php echo $age_YID;?>"
                  <?php echo $age_YID == ($othernutrition_YID) ? 'selected' : '' ; ?>
              ><?php echo $age_YName;?></option>
              <?php } $ages->close(); ?>
              
          </select>
        
          <input type="text" name="amount" value="<?php echo $othernutrition_AmountPerDay;?>" id="inputamount" class="form-control mb-3" placeholder="Amount Per Day" required>
          <hr>

          <button class="btn btn-block" type="submit" name="Edit">Edit</button>
          <a href="othernutritionlist.php" class="btn btn-block">Back</a>
        </div>
      </form>
    </div>
  </div>
</section>

</body>
</html>
<?php require("footer_fixedbottom2.php");?>