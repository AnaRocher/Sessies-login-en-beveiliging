<?php

include './includes/pdo.php';

unset($_SESSION['user']);

header('location: aanmelden.php');
exit;