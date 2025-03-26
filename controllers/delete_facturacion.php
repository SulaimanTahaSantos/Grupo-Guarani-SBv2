<?php
require_once '../includes/config.php';

if (!isset($_GET['id'])) {
    header("Location: ../views/index.php");
    exit();
}

$id = $mysqli->real_escape_string($_GET['id']);
$mysqli->query("DELETE FROM facturacion WHERE id = $id");

header("Location: ../views/index.php");
exit();