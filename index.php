<?php 
session_start();
include 'koneksi.php';

// Jika ada tombol login (tombol login ditekan)
if (isset($_POST["masuk"])) {
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
    
    // Gunakan prepared statement untuk mencegah SQL injection
    $query = $koneksi->prepare("SELECT * FROM user WHERE username = ? AND pasword = ?");
    $query->bind_param("ss", $username, $password);
    $query->execute();
    
    // Ambil hasil query
    $result = $query->get_result();
    
    // Hitung jumlah akun yang cocok
    $akunyangcocok = $result->num_rows;

    // Jika 1 akun yang cocok maka di loginkan
    if ($akunyangcocok == 1){
        // Anda sukses login
        $akun = $result->fetch_assoc();
        
        // Simpan di session pelanggan
        $_SESSION["masuk"] = $akun;
        echo "<script>alert('Anda Sukses Login!')</script>";
        echo "<script>location='Dasbord.php'</script>";
    }
    else{
        // Anda gagal login
        echo "<script>window.alert('Username atau Password Salah, Periksa Akun Anda!')</script>";
        echo "<script>location='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b7e1f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
        }

        .login-header {
            background-color: #288593;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .login-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .form-group button {
            background-color: #288593;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <form id="loginForm" action="" method="post" class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button class="btn-login" type="submit" name="masuk">Login</button>
            </div>
            <a href="daftar1.php" class="sign-up">Daftar Sekarang!</a>
        </form>
    </div>
</body>
</html>
