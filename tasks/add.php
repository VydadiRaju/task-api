<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));
$title = $data->title ?? '';
$description = $data->description ?? '';

$sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
$response = $conn->query($sql) ? ["message" => "Task added"] : ["error" => "Failed"];
echo json_encode($response);
?>