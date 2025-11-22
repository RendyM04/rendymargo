<?php
$uploadDir = 'uploads/latihan/';

// Buat folder utama jika belum ada
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
    $files = $_FILES['files'];
    $uploaded = 0;
    $errors = [];

    for ($i = 0; $i < count($files['name']); $i++) {
        $relativePath = $files['full_path'][$i] ?? $files['name'][$i]; // Untuk struktur folder
        $fileTmp = $files['tmp_name'][$i];
        $fileSize = $files['size'][$i];
        $fileType = strtolower(pathinfo($relativePath, PATHINFO_EXTENSION));

        // Validasi: hanya izinkan tipe file tertentu
        $allowedTypes = ['txt', 'pdf', 'jpg', 'jpeg', 'png', 'gif', 'html', 'css', 'js', 'php', 'zip', 'rar'];

        if (in_array($fileType, $allowedTypes) && $fileSize < 10000000) { // Max 10MB per file
            $targetFile = $uploadDir . $relativePath;

            // Buat subfolder jika diperlukan
            $targetDir = dirname($targetFile);
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $uploaded++;
            } else {
                $errors[] = "Gagal upload $relativePath.";
            }
        } else {
            $errors[] = "File $relativePath tidak diizinkan atau terlalu besar.";
        }
    }

    if ($uploaded > 0) {
        echo "<p>$uploaded file berhasil diupload.</p>";
    }
    if (!empty($errors)) {
        echo "<p>Kesalahan: " . implode(', ', $errors) . "</p>";
    }
    <a href='index.html'>Kembali ke Portfolio</a>;
} else {
    echo "Tidak ada file yang diupload.";
}
?>
