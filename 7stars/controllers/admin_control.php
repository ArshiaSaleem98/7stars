<?php
require_once "db_connection_manager.php";

$conn;
if(isset($_POST['order-btn'])) {
    loadFromDB($conn, "orders");
} else if(isset($_POST['product-btn'])) {
    loadFromDB($conn, "products");
} else if(isset($_POST['user-btn'])) {
    loadFromDB($conn, "users");
} else if(isset($_POST['product-add'])) {
    addProduct($conn);
} else if(isset($_POST['product-toggle'])) {
    toggleProduct($_POST['id'], $conn, true);
} else if(isset($_POST['order-status'])) {
    changeOrderStatus($conn, $_POST['id'], $_POST['status']);
}

function addProduct(mysqli $conn) {
    $description = $_POST['description'];
    $price = $_POST['price'];
    $notes = $_POST['notes'];
    $category = $_POST['category'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO products SET description=?, price=?, notes=?, category=?, gender=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sdsss", $description, $price, $notes, $category, $gender);
    $stmt->execute();
    $stmt->close();
    header("location: ../admin.php");
    exit();
}

function loadFromDB(mysqli $conn, $table) {
    $query = "select * from $table";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }

}

function toggleProduct($productId,mysqli $conn, $status) {
    $query = "update products set status=? where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii",$status, $productId);
    $result = $stmt->execute();
    $stmt->close();
}

function changeOrderStatus($conn, $orderId, $status) {
    $query = "update orders set status=? where id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si",$status, $orderId);
    $stmt->execute();
    $stmt->close();
}