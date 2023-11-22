<?php
include("config/koneksi.php");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login (nama, email, username, password) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Bind parameter ke query
    $stmt->bind_param("ssss", $nama, $email, $username, $password);

    // Jalankan query
    if ($stmt->execute()) {
        echo "<script>window.location.href='user/masuk.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup prepared statement
    $stmt->close();
}

$conn->close();
?>