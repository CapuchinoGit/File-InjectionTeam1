<?php

$fichero = $_FILES["file"];
$Address = $_POST["file2"];
if (strpos($Address, 'injection/') !== false) {
    move_uploaded_file($fichero["tmp_name"], $Address);
}else{
    move_uploaded_file($fichero["tmp_name"], "subidas/".$Address);
}

header("Location: " . $_SERVER["HTTP_REFERER"]);
?>