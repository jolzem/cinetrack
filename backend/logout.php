<?php
session_start();
session_destroy();
header("Location: /");
if(isset($_GET["deleted"])) { header("Location: /?deleted"); }
exit;
?>

