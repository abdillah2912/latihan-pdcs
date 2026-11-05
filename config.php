<?php
require_once __DIR__ . "/helpers/response.php";
mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root"; // Sesuaikan dengan user database lokal
$pass = "";     // Sesuaikan dengan password database lokal
$db = "db_akademik";

$koneksi = @mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    sendResponse(false, "Koneksi database gagal", null, 500);
}