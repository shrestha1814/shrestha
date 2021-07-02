<?php
session_start();
session_destroy();
header("location:/php/signin.php<?logout=you are sucessfully logout");
?>