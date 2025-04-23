<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$sql = "DELETE FROM tasks WHERE id=$id";
$response = $conn->query($sql) ? ["message" => "Deleted"] : ["error" => "Failed"];
echo json_encode($response);
?>