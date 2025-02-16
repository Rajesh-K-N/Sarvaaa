<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);
$_SESSION['dark-mode'] = $data['darkMode'];
echo json_encode(["status" => "success"]);
?>