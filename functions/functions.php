<?php
function getTitle($title = "Default Title"){
    echo "<title>$title</title>";
}

function redirect($url){
    header("Location: $url");
    exit();
}
?>