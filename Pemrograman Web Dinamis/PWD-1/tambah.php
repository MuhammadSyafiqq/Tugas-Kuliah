<?php
session_start();
include_once("koneksi.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $addresss = $_POST['addresss'];

    $check_email = mysqli_query($con, "SELECT * FROM registrasi WHERE email='$email'");
    if (mysqli_num_rows($check_email) > 0) {
        $error = "Email already registered";
    } else {
        $result = mysqli_query($con, "INSERT INTO registrasi(email,nama,institusi,country,addresss) VALUES('$email','$nama','$institusi','$country','$addresss')");
        if ($result) {
            header("Location: " . ($_SESSION['user_role'] == 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php'));
            exit();
        } else {
            $error = "Registration failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Registration - Maraton Kuantum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Registration</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="institusi" placeholder="Institusi" required>
            <input type="text" name="country" placeholder="Negara" required>
            <input type="text" name="addresss" placeholder="Alamat" required>
            <input type="submit" name="Submit" value="Add Registration">
        </form>
    </div>
</body>
</html>