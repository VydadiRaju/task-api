<?php
header("Content-Type: application/json");
include '../db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$title = $data->title;
$description = $data->description;

$sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
$response = $conn->query($sql) ? ["message" => "Updated"] : ["error" => "Failed"];
echo json_encode($response);
?>