<!DOCTYPE html >
<html>
  <head>
    <title>eshop</title>
      </head>
  <body>
  <form action="search.php" method="post">
    <h1>Search</h1>
    <?php
    $dsn='eshop';
    $username='root';
    $password='';
    @$db=new mysqli('localhost',$username,$password,$dsn);
    if(mysqli_connect_errno())
    {
        echo 'Connection error:'.$db->connect_errno;
        exit;
    }
    // $query = "SELECT PPrice FROM product";
    // $stmt = $db->prepare($query);
    // $stmt->execute();
    // $stmt->store_result();
    // $stmt->bind_result($PPrice);
    echo'
    <table> 
    <tr>
    <td>Choose Category:</td>
    <td><select name="searchtype">
    <option value="hide" hidden selected>Select item to search</option>
     <option value="course" name="course">Course</option>
     <option value="book" name="book">Book</option>
     </select></td></tr>
    <tr>
    <td><span>Price Range:</span></td><td>
    <input type="text" name="lprice"> - 
    <input type="text" name="hprice">
</td></tr>
    <tr><td>
    <input type="submit" name="search" value="Search"></td></tr>
    </table>';
    // $lprice=(int)ltrim($_POST['lprice']);
    // $hprice=(int)ltrim($_POST['hprice']);
     if(isset($_POST["search"]))
     {
         $query="";
        if(isset($_POST["searchtype"]) and $_POST["lprice"] and $_POST["hprice"])
        {
             $lprice=(int)$_POST["lprice"];
             $hprice=(int)$_POST["hprice"];
             $lprice=ltrim("$lprice",0);
             $hprice=ltrim("$hprice",0);
             $query="SELECT PID, PName, PCat,PPrice, PPic FROM product WHERE PCat=? AND PPrice BETWEEN ? AND ?";
             $stmt=$db->prepare($query);
             $stmt->bind_param('sii',$_POST["searchtype"],$lprice,$hprice);
             $stmt->execute();
             $stmt->store_result();
             
             $stmt->bind_result($pid,$name,$cat,$price,$pic);
             echo'<table>';
             while($stmt->fetch()){
                echo '<tr>
                        <td>';
                            echo '<p><strong>PID: '.$pid.'</strong>';
                            echo '<br>Name: '.$name;
                            echo '<br>Price: '.$price;
                            echo '<br>Category: '.$cat.'</p>';
                echo '  </td>
                        <td><img src="'.$pic.'" width="100px" height="100px"/></p></td>
                    </tr>';
            }
             $stmt->free_result();
             $db->close();
         }
     }
    ?>
    </form>
    </body>
    </html>