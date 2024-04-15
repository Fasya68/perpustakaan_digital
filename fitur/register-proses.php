<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama_lengkap = $_POST['nama'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

// Hapus nilai ID dari query karena akan diatur otomatis oleh database
$query = "CALL tambahuser (NULL, '$username', '$password', '$email', '$nama_lengkap', '$alamat', '$level')";
mysqli_query($connect, $query);

// Tambahkan penanganan kesalahan jika diperlukan
if (mysqli_error($connect)) {
    echo "Error: " . mysqli_error($connect);
} else {
    echo '<script>
    alert("Menambahkan Akun Berhasil");
    window.location="anggota.php";
    </script>';
}

mysqli_close($connect);
?>
