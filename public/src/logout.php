<?php

require_once './private/config/variables.php';

$_SESSION['uid'] = null;
$_SESSION['firstname'] = null;

// Redirect to home page
header('Location: ' . BASE_URL);
exit();
