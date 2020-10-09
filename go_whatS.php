<?php

 $link = empty($_POST['number'])? "sand_whatsApp.php": "https://wa.me/$_POST[number]";
 
 header("Location: $link ");
 
?>