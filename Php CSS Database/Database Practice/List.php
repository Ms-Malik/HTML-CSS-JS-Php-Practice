<!DOCTYPE html >
<html>
  <head>
    <title>eshop</title>
      </head>
  <body>

    <h1>  Product Info</h1>

<?php

$dsn = "eshop";
$username = "root";
$password = "";
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "SELECT PPic, PName,PPrice FROM product";
 $stmt = $db->prepare($query);
  $stmt->execute();
  $stmt->store_result();
 $stmt->bind_result($PPic, $PPrice, $PName);
 echo "<p>Number of products found ".$stmt->num_rows."</p>";
 ?>
 <table border="1" width="100%" cellpadding="5" cellspacing="5">
  <tr>
  <?php
  $count=0;
  while($stmt->fetch()) {
    $count=$count+1;
    if($count==0||$count%4==0)
    {
      echo"<tr>";
    }
    ?>
    <td><img style="width:300px; height:200px" src="<?php echo $PPic?>"><h3><?php echo $PName?></h3><h3><?php echo $PPrice?></h3><a href="addcart.php"><h3>Add to cart</h3></a></td>
    <?php if($count%3==0)
    {
      echo"</tr>";
    }
    ?>
    <?php
 }
 $db->close();
  $stmt->free_result();
 ?>
      </tr>
    </table>
  </body>
  </html>