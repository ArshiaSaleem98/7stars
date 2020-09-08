<?php
require "db_connection_manager.php";
$query = "";
$gender = $_POST['gender'] ?? false;
$category = $_POST['category'] ?? false;

if(!$gender && !$category) {
    $query = "select * from products";
    $stmt = $conn->prepare($query);
} else if (!$category) {
    $query = "select * from products where gender=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $gender);
} else if(!$gender) {
    $query = "select * from products where category=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $category);
} else {
    $query = "select * from products where gender=? and category=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $gender, $category);
}


$stmt->execute();
$rows = array();
$result = $stmt->get_result();

$rows = $result->fetch_assoc();
$stmt->close();
echo json_encode($rows);