<?php
function pdo_get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function pdo_execute($sql)
{
    $conn = pdo_get_connection();
    $sql = $conn->prepare($sql);
    $sql->execute();
}
// truy vấn nhiều dữ liệu
function pdo_query($sql)
{
    $conn = pdo_get_connection();
    $sql = $conn->prepare($sql);
    $sql->execute();
    $kq = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $kq;
}
// truy vấn  1 dữ liệu
function pdo_query_one($sql)
{
    $conn = pdo_get_connection();
    $sql = $conn->prepare($sql);
    $sql->execute();
    $kq = $sql->fetch(PDO::FETCH_ASSOC);
    return $kq;
}
?>
