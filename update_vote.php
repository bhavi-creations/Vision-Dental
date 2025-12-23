<?php
session_start();
include './db.connection/db_connection.php';

if(!isset($_POST['blog_id'],$_POST['action'])){
    echo json_encode(["status"=>"error"]);
    exit;
}

$blog_id = intval($_POST['blog_id']);
$action  = $_POST['action']; // like / dislike
$user    = session_id();

/* CHECK */
$check = $conn->prepare("
    SELECT id FROM blog_reactions
    WHERE blog_id=? AND created_at=?
");
$check->bind_param("is",$blog_id,$user);
$check->execute();
$check->store_result();

if($check->num_rows>0){
    echo json_encode(["status"=>"already"]);
    exit;
}

/* INSERT */
$ins = $conn->prepare("
    INSERT INTO blog_reactions (blog_id,reaction,created_at)
    VALUES (?,?,?)
");
$ins->bind_param("iss",$blog_id,$action,$user);
$ins->execute();

/* NEW COUNTS */
$likes = $conn->query("SELECT COUNT(*) c FROM blog_reactions WHERE blog_id=$blog_id AND reaction='like'")->fetch_assoc()['c'];
$dislikes = $conn->query("SELECT COUNT(*) c FROM blog_reactions WHERE blog_id=$blog_id AND reaction='dislike'")->fetch_assoc()['c'];

echo json_encode([
    "status"=>"success",
    "likes"=>$likes,
    "dislikes"=>$dislikes
]);
