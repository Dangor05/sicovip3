<?php
include_once 'php/Own.php';
$objUser = new client();

echo json_encode($objUser->buscar($_GET['term']));
 ?>