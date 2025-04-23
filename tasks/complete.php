<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$sql = "UPDATE tasks SET is_completed=1 WHERE id=$id";
$response = $conn->query($sql) ? ["message" => "Marked as complete"] : ["error" => "Failed"];
echo json_encode($response);
?>