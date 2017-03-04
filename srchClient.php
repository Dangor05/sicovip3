<?php
include_once 'php/client.php';
$objUser = new client();

echo json_encode($objUser->buscar($_GET['term']));
 ?>