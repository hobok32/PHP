<?php
//   
//    
    $a=mysqli_connect("den1.mysql2.gear.host","fruits1","Eo36S~Q4w3?8");
    mysqli_select_db($a,"fruits1");
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data["Id"];
    $sqlDel = "DELETE FROM Fruit WHERE Id = '$id'";
    $a->query($sqlDel);
?>
