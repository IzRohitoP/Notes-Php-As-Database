<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $_POST["name"] . " " . $_POST["phone"];
    echo "<br>". " Data successfully Added \n";
    echo "<br>". "<a href='PK.html'>Back</a>";
    
}

?>
