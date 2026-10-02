<?php
include "koneksi.php";

$id = intval($_GET["id"] ?? 0);
if ($id <= 0) die("ID tidak valid.");

$stmt = $conn->prepare("SELECT * FROM testimoni WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) die("Testimoni tidak ditemukan.");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    if ($nama === "" || $pesan === "") die("Nama dan testimoni wajib diisi.");

    $update = $conn->prepare("UPDATE testimoni SET nama = ?, pesan = ? WHERE id = ?");
    $update->bind_param("ssi", $nama, $pesan, $id);

    if ($update->execute()) {
        header("Location: index.php#testimoni");
        exit;
    }
    die("Gagal mengubah testimoni.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Testimoni - GuitarSpace</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="edit-page">
<div class="container">
    <div class="edit-box">
        <div class="text-center mb-4">
            <div class="edit-icon">🎸</div>
            <h2>Edit Testimoni</h2>
            <p>Perbarui pengalamanmu di GuitarSpace.</p>
        </div>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Testimoni</label>
                <textarea name="pesan" class="form-control" rows="5" required><?= htmlspecialchars($data['pesan']); ?></textarea>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-orange flex-fill">Simpan Perubahan</button>
                <a href="index.php#testimoni" class="btn btn-light flex-fill">Batal</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>