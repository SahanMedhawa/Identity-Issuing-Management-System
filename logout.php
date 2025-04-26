<?php 
require_once 'include/chooseHeader.php';

session_unset();
session_destroy();
header('Location: index.php');

?>