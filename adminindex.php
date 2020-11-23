<?php require("header.php");?>
<?php require("sec_nav.php");?>
 
<!-- backend code  -->
<?php
  $statement = $connection->prepare('SELECT `uid`, `user`, `email`, `phone` 
  FROM `user`
  WHERE `uid` = user.uid
  ORDER BY uid'  );
  $statement->execute();
  // SELECT vitamin sources
  $statement->bind_result($uid,$user,$email,$phone);
?>

<!-- Vitamin List Frontend -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminindex.css">
  <title>Document</title>
</head>
<body>

<!-- User List -->
<section class="user">

  <!-- User list table -->
  <section class="col-lg-10 mx-auto"  >
  <h3 class="text-center">User Lists</h3>
  <hr>
    <div class="mt-3  overflow-auto" style="height: 25em !important;">
        <table class="table table-striped table-dark">
            <thead class="text-center">
                <tr>
                <th>No ID</th>
                <th>User Name</th>
                <th>E-mail</th>
                <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php while($statement->fetch()){?>
                <tr>
                    <td><?php echo $uid; ?></td>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
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
