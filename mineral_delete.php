<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
  if(isset($_POST["Delete"])){
    $mineralid=$_POST["mid"];
    $mineralname= $_POST["mineralname"];
    $ageid = $_POST["yid"];
    $amount = $_POST["amount"];

    $statement = $connection->prepare('DELETE FROM `mineral` WHERE `MID`=?');
    $statement->bind_param('i',$mineralid);
    if($statement->execute()){
      echo "<script>alert('Deleting Successful');location.assign('minerallist.php');</script>" ;
    }else{
      echo "<script>alert('Failed!');</script>" ;
    }
  }

  if(isset($_GET["id"])){
    $id=$_GET["id"];
    $mineral = $connection->prepare('SELECT `MID`, `MName`, `YID`, `AmountPerDay` FROM `mineral` WHERE MID=?');
    $mineral->bind_param('i',$id);
    $mineral->execute();
    $mineral->bind_result($mineral_MID, $mineral_MName, $mineral_YID, $mineral_AmountPerDay);
    $mineral->fetch();
    $mineral->close();
  }else{
    echo "<script>location.assign('minerallist.php');</script>" ;
  }

?>


  <main role="main" class="container mt-5">
    
    <section class="row">
      <div class="col-lg-8 row">
        <div class="col-lg-12"> 
          <img src="bg_img/fruit.jpg" alt="" class="img-fluid shadow-lg" style="height: 52%">
        </div>
        <div class="col-lg-12 mt-3">
          <hr class="bg-dark">
        </div>
      
      </div>

      <div class="text-center
       col-lg-4" >

        <form class="card shadow" method="post">
            <div class="card-header bg-brand text-white">
              <h5 >Deleting Mineral Sources</h5>
            </div>
            <div class="card-body">
                  <input type="hidden" name="mid" value="<?php echo $mineral_MID;?>" required>
                  <input type="text" name="mineralname" value="<?php echo $mineral_MName;?>" id="inputmineralname" class="form-control mb-3" placeholder="Mineral Name" required >
                  <select name="yid" id="inputyid" class="form-control mb-3" required>
                    <?php
                        $ages = $connection->prepare('SELECT `YID`, `YName` FROM `age` ');
                        $ages->execute();
                        $ages->bind_result($age_YID,$age_YName);
                        while($ages->fetch()){
                    ?>
                      <option value="<?php echo $age_YID;?>"
                          <?php echo $age_YID == ($mineral_YID) ? 'selected' : '' ; ?>
                      ><?php echo $age_YName;?></option>
                     <?php } $ages->close(); ?>
                      
                  </select>
               
                  <input type="text" name="amount" value="<?php echo $mineral_AmountPerDay;?>" id="inputamount" class="form-control mb-3" placeholder="Amount Per Day" required>
                  <hr class="bg-dark">
                
                <button class="btn btn-outline-primary btn-block" type="submit" name="Delete">Delete</button>
                <a href="minerallist.php" class="btn btn-outline-primary btn-block">Back</a>
            </div>
        </form>
      </div>
    </section>
    
  </main><!-- /.container -->
<?php require("footer_fixedbottom.php");?>
