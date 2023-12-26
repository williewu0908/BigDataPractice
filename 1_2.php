<?php 
require_once 'DBConnectionHandler.php';

$serverName = "localhost";   // host,運行於XAMPP時使用localhost即可。
$userName   = "root";        // 資料庫之使用者名稱，XAMPP預設root
$password   = "";            // 資料庫使用者密碼，XAMPP預設空
$db         = "SQL_practice";        // 欲連接的資料庫名稱

try {
    DBConnectionHandler::setConnection($serverName, $userName, $password, $db);
    $connection = DBConnectionHandler::getConnection();
    echo "Connection successful!".'<br>';
}catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$idValue = 39;
$NA = "NA";

$sql = "SELECT COUNT(DISTINCT dp001_question_sn) AS result FROM edu_bigdata_imp1 WHERE PseudoID=:ID AND dp001_question_sn != :NA;";
$stmt = $connection->prepare($sql);
$stmt->bindParam(":ID", $idValue);
$stmt->bindParam(":NA", $NA);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
print_r($stmt->fetchAll());

?>