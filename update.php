<?php
//   
//    
    $a=mysqli_connect("den1.mysql2.gear.host","fruits1","Eo36S~Q4w3?8");
    mysqli_select_db($a,"fruits1");
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data["Id"];
    $name = $data["Name"];
    $price = $data["Price"];
    $season = $data["Season"];
    $storeAmount = $data["StoreAmount"];
    $sqlUpdate = "UPDATE Fruit SET Name = '$name', Price = '$price', Season = '$season', StoreAmount = '$storeAmount' WHERE Id = '$id'";
    $a->query($sqlUpdate);
?>
