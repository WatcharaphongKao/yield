<?php
try {
    $pdo = new PDO('mysql:host=192.168.10.23;dbname=hvengineering3', 'ik', '1234');
    echo "เชื่อมต่อสำเร็จ!";
} catch (PDOException $e) {
    echo "การเชื่อมต่อล้มเหลว: " . $e->getMessage();
}
?>
