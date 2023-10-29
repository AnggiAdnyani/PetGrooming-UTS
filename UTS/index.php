<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Ambil parameter 'page' dari URL

switch ($page) {
    case 'home':
        header('Location: Home.php'); // Pindah ke halaman Home.php
        break;
    case 'service':
        header('Location: Service.php'); // Pindah ke halaman Service.php
        break;
    default:
        echo "Halaman tidak ditemukan"; // Halaman default jika parameter tidak sesuai
        break;
}
?>
