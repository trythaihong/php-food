<?php  
$db_name = 'mysql:host=localhost;port=3307;dbname=food_db'; 
$user_name = 'root'; 
$user_password = '';  

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // Set error mode to exception for better debugging
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection successful!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
