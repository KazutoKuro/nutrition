<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
   $statement=$connection->prepare('SELECT `NID`, `NName`, age.YName, `AmountPerDay` 
    FROM `othernutrition`,`age`
    WHERE age.YID=othernutrition.YID
    ORDER BY othernutrition.NID'  );
    $statement->execute();
    // SELECT othernutrition sources
    $statement->bind_result($nid,$nname,$year,$amount);
?>


  <main role="main" class="container mt-5">
    <!-- Other Nutrtion source -->
    <section class="row">
     
      <!-- Other Nutrition list table -->
      <section class="col-lg-10 mx-auto"  >
      <h3>Other Nutrition Sources List</h3>
      <hr>
        <div class="mt-3  overflow-auto" style="height: 25em !important;">
          <table class="table table-striped table-dark">
              <thead class="text-center">
                  <tr>
                    <th>No ID</th>
                    <th>Nutrition Name</th>
                    <th>Year</th>
                    <th>Amount Per Day</th>
                    <th>Option</th>
                  </tr>
              </thead>
              <tbody>
                  <?php while($statement->fetch()){?>
                  <tr>
                      <td><?php echo $nid; ?></td>
                      <td><?php echo $nname; ?></td>
                      <td><?php echo $year; ?></td>
                      <td><?php echo $amount; ?></td>
                      <td>
                        <a href="othernutrition_edit.php?id=<?php echo $nid;?>" class="btn btn-outline-success btn-sm">Edit</a>
                        <a href="othernutrition_delete.php?id=<?php echo $nid;?>" class="btn btn-outline-danger btn-sm">Delete</a>
                      </td>
                  </tr>
                  <?php }?>
                  
              </tbody>
          </table>
        </div>
      </section>
    </section>
    
  </main><!-- /.container -->
<?php require("footer_fixedbottom.php");?>
