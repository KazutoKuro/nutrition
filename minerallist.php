<?php require("header.php");?>
<?php require("sec_nav.php");?>

<!-- backend code  -->
<?php
    $statement = $connection->prepare('SELECT `MID`, `MName`, age.YName, `AmountPerDay` 
    FROM `mineral`,`age`
    WHERE age.YID=mineral.YID
    ORDER BY mineral.MID'  );
    $statement->execute();
    // SELECT mineral sources
    $statement->bind_result($mid,$mname,$year,$amount);
?>

<!-- Mineral List Frontend -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="minerallist.css">
  <title>Document</title>
</head>
<body>
  <!-- Mineral Sources -->
<section class="mineral">
  
  <!-- Mineral list table -->
  <section class="col-lg-10 mx-auto"  >
    <h3 class="text-center">Mineral Sources List</h3>
    <hr>
    <div class="mt-3  overflow-auto" style="height: 25em !important;">
      <table class="table table-striped table-dark">
          <thead class="text-center">
              <tr>
                <th>No ID</th>
                <th>Mineral Name</th>
                <th>Year</th>
                <th>Amount Per Day</th>
                <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <?php while($statement->fetch()){?>
              <tr>
                  <td><?php echo $mid; ?></td>
                  <td><?php echo $mname; ?></td>
                  <td><?php echo $year; ?></td>
                  <td><?php echo $amount; ?></td>
                  <td>
                    <a href="mineral_edit.php?id=<?php echo $mid;?>" class="btn btn-outline-success btn-sm">Edit</a>
                    <a href="mineral_delete.php?id=<?php echo $mid;?>" class="btn btn-outline-danger btn-sm">Delete</a>
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
