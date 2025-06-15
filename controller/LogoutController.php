<?php

session_start();
session_destroy();
header('Location: ../index.php?cod=172');
exit();
?>
