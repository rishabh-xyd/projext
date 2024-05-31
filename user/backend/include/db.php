<?php
$conn = new mysqli("localhost:3306", "root", "root", "str-shpoing");
if ($conn->connect_errno) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}
