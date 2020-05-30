<?php
    include("php/Config.php");
    
    $sql = "select * from audio_details";
    $result = mysqli_query("$db, $sql");
    
    $row = mysqli_fetch_assoc($result, MYSQLI_ASSOC);

    echo $row["ID"]." ".$row["name"]."<br>";

?>