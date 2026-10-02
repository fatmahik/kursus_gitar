<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    if ($nama === "" || $pesan === "") {
        die("Nama dan testimoni wajib diisi.");
    }

    $stmt = $conn->prepare("INSERT INTO testimoni (nama, pesan) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama, $pesan);

    if ($stmt->execute()) {
        header("Location: index.php#testimoni");
        exit;
    }

    die("Gagal menyimpan testimoni.");
}
?>