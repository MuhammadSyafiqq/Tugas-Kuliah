<?php
session_start();
include_once("koneksi.php");

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $addresss = $_POST['addresss'];

    $result = mysqli_query($con, "UPDATE registrasi SET email='$email',nama='$nama',institusi='$institusi',country='$country',addresss='$addresss' WHERE id=$id");
    
    header("Location: admin_dashboard.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM registrasi WHERE id=$id");
$user_data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration - Maraton Kuantum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh
            ;margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 2em;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Registration</h2>
        <form name="update_registrasi" method="post" action="edit.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="email" name="email" value="<?php echo $user_data['email']; ?>" required>
            <input type="text" name="nama" value="<?php echo $user_data['nama']; ?>" required>
            <input type="text" name="institusi" value="<?php echo $user_data['institusi']; ?>" required>
            <input type="text" name="country" value="<?php echo $user_data['country']; ?>" required>
            <input type="text" name="addresss" value="<?php echo $user_data['addresss']; ?>" required>
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>