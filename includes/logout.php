<?php
session_start();
session_destroy();

header('location: ../public/index.php');
exit();