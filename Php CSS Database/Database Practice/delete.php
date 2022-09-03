<!DOCTYPE html >
<html>
  <head>
    <title>eshop</title>
      </head>
  <body>
  <form action="delete.php" method="post">
    <h1>Delete</h1>
<?php
$dsn = "eshop";
$username = "root";
$password = "";
@$db = new mysqli('localhost', $username, $password,$dsn);
 if (mysqli_connect_errno()) 
   {
  echo 'Connection error: ' . $db->connect_errno;
 exit;
 }
 $query = "SELECT PID,PPrice FROM product";
 $stmt = $db->prepare($query);
 $stmt->execute();
 $stmt->store_result();
 $stmt->bind_result($PID, $PPrice);
 echo "<p>Number of products found ".$stmt->num_rows."</p>";
 ?>
 <table border="1" width="30%" cellpadding="5" cellspacing="5">
  <tr>
  <?php
  while($stmt->fetch()) {
    echo'
    <tr>
    <td>'.$PID.'</td>
    <td>'.$PPrice.'</td>
    <td><input type="checkbox" name="dlt[]" value="'.$PID.'"></td>
</tr>';
 }
      echo '<tr><td colspan=3><input type="submit" name="btn" value="Delete"></td></tr>
            </table>';
      $db->close();
 $stmt->free_result();
 ?>
</body>
</html>
<?php
$db = new mysqli('localhost', 'root','', 'eshop');
if (mysqli_connect_errno()) 
{
    echo 'Connection error:' .$db->connect_errno;
exit;
}
 if(isset($_POST["btn"]))
 {
   if(isset($_POST["dlt"]))
   {
     foreach($_POST["dlt"] as $delete)
     {
       $delete=(int)$delete;
       $query="DELETE from product where PID=?";
       $stmt=$db->prepare($query);
       $stmt->bind_param('i',$delete);
       $stmt->execute();
       $stmt->store_result();
       header("Location: List.php"); 
     }
   }
 }
?>   