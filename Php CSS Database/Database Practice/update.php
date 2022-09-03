<!DOCTYPE html >
<html>
  <head>
    <title>eshop</title>
      </head>
  <body>
  <form action="update.php" method="post">
    <h1>Update</h1>
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
            $getData = "SELECT PID FROM product";
            $stmt = $db->prepare($getData);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($pid);
            $pidArray = array();
            
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td><span>Product ID: </span></td>
                    <td>
                        <select name="pid">
                            <?php
                                while($stmt->fetch()){
                                    echo '<option value="'.$pid.'">'.$pid.'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><span>Price: </span></td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="update"></td>
                </tr>
            </table>
        </form>
        <?php
            $stmt->free_result();
            $db->close();
        ?>
    </body>
</html>
<?php
    $db = new mysqli('localhost', 'root','', 'eshop');
    if (mysqli_connect_errno()) {
        databaseError();
    exit;
    }
    if(isset($_POST["update"])){
        if($_POST["price"]){
            $updateQuery = "UPDATE product SET PPrice=? WHERE PID=?";
            $stm = $db->prepare($updateQuery);
            $stm->bind_param('ii',$_POST["price"], $_POST["pid"]);
            $stm->execute();
            $stm->store_result();
            header("Location: List.php");
        }
    }
    function databaseError(){
        echo '<p>Error: Could not connect to database.<br/>
        Please try again later.</p>';
    }
?>