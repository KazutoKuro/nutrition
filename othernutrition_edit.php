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


  <main role="main" class="container mt-5">
    
    <section class="row">
      <div class="col-lg-8 row">
        <div class="col-lg-12"> 
          <img src="bg_img/nutritionplate.jpg" alt="" class="img-fluid shadow-lg" style="height: 52%">
        </div>
      </div>

      <div class="text-center
       col-lg-4" >

        <form class="card shadow" method="post">
            <div class="card-header bg-brand text-white">
              <h5 >Please Edit Nutrition Sources</h5>
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
                  <hr class="bg-dark">
                
                <button class="btn btn-outline-primary btn-block" type="submit" name="Edit">Edit</button>
                <a href="othernutritionlist.php" class="btn btn-outline-primary btn-block">Back</a>
            </div>
        </form>
      </div>
    </section>
    
  </main><!-- /.container -->
<?php require("footer_fixedbottom.php");?>
