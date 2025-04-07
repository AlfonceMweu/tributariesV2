<?php
include("config.php");
$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$stmt = $db->query("SELECT * FROM comment where iconName = '$name' ORDER BY timestamp ASC;");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    foreach ($result as &$row) {
        $row = array_map('trim', $row);
    }
    echo json_encode($result);

?>