<?php
$gambar = $_FILES['gambar'];
$namaFile = $gambar['name'];
$ukuran = $gambar['size'];
$tmp = $gambar['tmp_name'];

$folder = "uploads/";

// validasi ekstensi file

$ekstensiValid = ['jpg', 'jpeg', 'png'];
$ekstensi = strtolower(pathinfo($gambar['name'], PATHINFO_EXTENSION));
if (!in_array($ekstensi, $ekstensiValid)) {
    echo "<div class='alert alert-danger'>Ekstensi file tidak valid. Hanya file JPG, JPEG, dan PNG yang diperbolehkan.</div>";
    exit;
}

// validasi ukuran file
if ($ukuran > 1000000) {
    echo "<div class='alert alert-danger'>Ukuran file terlalu besar. Maksimal ukuran file adalah 2MB.</div>";
    exit;
}

// rename file agar unik
$namaBaru = uniqid() . '.' . $ekstensi;

// pindahkan filel ke folder uploads
if (move_uploaded_file($tmp, $folder . $namaBaru)) {
    echo "<div class='alert alert-success'>File berhasil diupload.</div>";
    echo "<img src='" . $folder . $namaBaru . "' alt='Gambar' class='img-fluid mt-3'>";

    header("location: gallery.php");
    exit;

} else {
    echo "<div class='alert alert-danger'>Terjadi kesalahan saat mengupload file.</div>";
}
?>