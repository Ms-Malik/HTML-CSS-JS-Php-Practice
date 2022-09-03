<?php session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                width: 600px;
                border-collapse: collapse;
            }
            td, th{
                border: 2px solid teal;
                padding: 5px;
            }
            h1{
                text-align: center;
            }
            body{
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="main-cart">
            <h1>Cart</h1>
            <table>
                <tr>
                    <th>PID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                </tr>
                <?php
                if(isset($_SESSION["cart"]) AND isset($_SESSION["count"])){
                    $sum=0;
                    for($j = 0; $j < $_SESSION["count"]; $j++){
                        $SPID = (int)$_SESSION["cart"][$j][0];
                        echo '<tr><td>'.$_SESSION["cart"][$j][0].'</td>
                            <td>'.$_SESSION["cart"][$j][1].'</td>
                            <td>'.$_SESSION["cart"][$j][2].'</td>
                            <td>'.$_SESSION["cart"][$j][3].'</td>
                            <td><a href="removeCart.php?PID='.$_SESSION["cart"][$j][0].'">Remove</a></td></tr>';
                        $sum = $sum + ($_SESSION["cart"][$j][3] * $_SESSION["cart"][$j][2]);
                    }
                }
                echo '<tr>
                        <td colspan="4" align="right"><b>Total:</b></td>
                        <td>'.$sum.'</td>
                    </tr>';
                ?>
            </table>
        </div>
    </body>
</html>