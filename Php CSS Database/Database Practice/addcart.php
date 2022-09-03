<?php session_start();
    if(!isset($_SESSION["cart"]))
        $_SESSION["cart"]=array();
    if(!isset($_SESSION["count"])){
        $_SESSION["count"] = 0;
    }
    if(!isset($_GET["PID"])){
        //echo 'get not set';
        exit;
    }
    $db = new mysqli('localhost', 'root','', 'eshop');
    if (mysqli_connect_errno()) {
        //databaseError();
    exit;
    }
    $getID = (int)$_GET["PID"];
    $getData = "SELECT PID, PName, PPrice FROM product WHERE PID=?";
    $stmt=$db->prepare($getData);
    $stmt->bind_param('i', $getID);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($pid, $name, $price);
    while($stmt->fetch()){
        $dataArray = array("PID"=>$pid, "Name"=>$name, "Price"=>$price);
    }
    $flag = false;
    for($i = 0; $i < $_SESSION["count"]; $i++){
        //echo 'array'.$_SESSION["cart"][$i][0];
        if($_SESSION["cart"][$i][0] == $getID){
            $_SESSION["cart"][$i][3]++;
            $flag = true;
        }
    }
    if($flag == false AND $dataArray){
        $_SESSION["cart"][]= array($dataArray["PID"], $dataArray["Name"], $dataArray["Price"], 1);
        $_SESSION["count"]++;
    }
    header("Location:List.php");
    function databaseError(){
        echo '<p>Error: Could not connect to database.<br/>
        Please try again later.</p>';
    }
?>