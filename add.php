<?php
//   
//    
    $a=mysqli_connect("den1.mysql2.gear.host","fruits1","Eo36S~Q4w3?8");
    mysqli_select_db($a,"fruits1");
    $data = json_decode(file_get_contents('php://input'), true);
    
    $name = $data["Name"];
    $price = $data["Price"];
    $season = $data["Season"];
    $storeAmount = $data["StoreAmount"];
    $sqlAdd = "INSERT INTO Fruit (Name, Price, Season, StoreAmount) VALUES ('$name', '$price', '$season', '$storeAmount')";
    
    $a->query($sqlAdd);
   
?>
