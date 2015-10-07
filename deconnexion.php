<?php

// Permet de se déconnecter de la session
session_start();
$_SESSION = array();
session_destroy();
header('Location: index.php');
