<?php
include("config.php");
$data = json_decode(file_get_contents('php://input'), true);
$randomUser = $data['randomUser'];
$iconName = $data['iconName'];
$userComment = $data['userComment'];
$current_timestamp = date("Y-m-d H:i:s");
if($userComment == ""){
    echo json_encode("No userComment");
}
else{
    $stmt = $db->prepare("insert into comment values (?, ?, ?, ?)");
    if($stmt->execute([$iconName, $randomUser, $userComment, $current_timestamp])){
        echo json_encode("Data Inserted");
    }
}


?>