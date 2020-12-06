<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
  $statement = $connection->prepare('SELECT `VID`, `VName`, age.YName, `AmountPerDay` 
  FROM `vitamin`,`age`
  WHERE age.YID=vitamin.YID
  ORDER BY vitamin.VID'  );
  $statement->execute();
  // SELECT vitamin sources
  $statement->bind_result($vid,$vname,$year,$amount);
?>

<!-- Vitamin List Frontend -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin_sources_list.css">
  <title>Document</title>
</head>
<body>

<!-- Vitamin source -->
<section class="list">

  <!-- Vitamin Source list table -->
  <section class="col-lg-10 mx-auto"  >
  <h3 class="text-center">Vitamin Sources List</h3>
  <hr>
    <div class="mt-3  overflow-auto" style="height: 25em !important;">
      <table class="table table-striped table-dark">
          <thead class="text-center">
              <tr>
                <th>No ID</th>
                <th>Vitamin Name</th>
                <th>Year</th>
                <th>Amount Per Day</th>
                <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <?php while($statement->fetch()){?>
              <tr>
                  <td><?php echo $vid; ?></td>
                  <td><?php echo $vname; ?></td>
                  <td><?php echo $year; ?></td>
                  <td><?php echo $amount; ?></td>
                  <td>
                    <a href="vitamin_edit.php?id=<?php echo $vid;?>" class="btn btn-outline-success btn-sm">Edit</a>
                    <a href="vitamin_delete.php?id=<?php echo $vid;?>" class="btn btn-outline-danger btn-sm">Delete</a>
                  </td>
              </tr>
              <?php }?>
          </tbody>
      </table>
    </div>
  </section>
</section>

</body>
</html>

<?php require("footer_fixedbottom2.php");?>
