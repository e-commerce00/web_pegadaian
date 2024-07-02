<?php 
include 'koneksi.php';

$id = $_POST['nik'];
$query = "SELECT nama, ktp, foto_ktp FROM pelanggan WHERE nik = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if ($data['foto_ktp']) {
    $gambar = 'data:image/jpeg;base64,' . base64_encode($data['foto_ktp']);
  } else {
    $gambar = '#'; // URL placeholder jika gambar kosong
  }

$response = array(
    'nama' => $data['nama'],
    'ktp' => $data['ktp'],
    'gambar' => $gambar
);

// Mengirimkan data dalam format JSON
echo json_encode($response);
?>