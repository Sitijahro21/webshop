<?php 
session_start();
include 'koneksi.php';

// Jika ada tombol daftar (tombol daftar ditekan)
if (isset($_POST["daftar"])) {
    // mengambil isian data 
  
    $email = $_POST["username"];
    $password = $_POST["pass"];

    // cek apakah email sudah pernah digunakan
    $ambil = $koneksi->query("SELECT * FROM user WHERE username='$email'");
    $yangcocok = $ambil->num_rows;

    if ($yangcocok == 1) {
        echo "<script>alert('username Telah Digunakan');</script>";
        echo "<script>location='signup.php'</script>";
    } else {
        // Insert data into the user table without hashing the password
        $koneksi->query("INSERT INTO user (username, pasword) VALUES ('$email','$password')");

        echo "<script>alert('Pendaftaran Berhasil, Silahkan Login!');</script>";
        echo "<script>location='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        /* Your CSS styling here */
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

        .signup-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
        }

        .signup-header {
            background-color: #288593;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .signup-form {
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
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <center><h2 class="signup-header">Daftar</h2></center>
                    <form method="POST" class="register-form" id="register-form">
                        
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="username" name="username" id="email" placeholder="Username Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password:</label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required minlength="6" oninvalid="this.setCustomValidity('Password Minimal 6 Karakter')" oninput="setCustomValidity('')"/>
                        </div>
                        <div class="form-group">
                            <label for="re_pass">Ulangi Password:</label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Ulangi Password" required>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="daftar" id="daftar" class="form-button" value="Daftar"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                        <figure><img src="" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Saya sudah punya akun!</a>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/maindaftar.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
