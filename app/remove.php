<?php

if(isset($_POST['id'])){
    require '../db.php';

    $id = $_POST['id'];
    

    if(empty($id)){
        echo 0;
    }else {
        $stmt = $conn->prepare("DELETE FROM slacker WHERE id=?)");
        $stmt->execute([$id]);
    

    if($stmt){
        echo 1; 
    }else {
        echo 0;
    }
    $conn = null;
    exit();
    }
    
} else {
    header("Location: ../index.php?mess=error");
}