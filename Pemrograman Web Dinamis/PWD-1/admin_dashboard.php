<?php
session_start();
include_once("koneksi.php");

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$result = mysqli_query($con, "SELECT * FROM registrasi ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Maraton Kuantum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        .add-new {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout {
            float: right;
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard - Maraton Kuantum</h1>
    <a href="logout.php" class="logout">Logout</a>
    <a href="tambah.php" class="add-new">Tambah Peserta Baru</a>
    <table>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Negara</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['institusi']."</td>";
            echo "<td>".$user_data['country']."</td>";
            echo "<td>".$user_data['addresss']."</td>";
            echo "<td class='action-links'>
                    <a href='edit.php?id=$user_data[id]'>Edit</a>
                    <a href='delete.php?id=$user_data[id]' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>