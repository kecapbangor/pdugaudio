<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['user'] = $row['username'];
        $_SESSION['role'] = $row['role']; 
        
        header("Location: dashboard_pricelist.php");
        exit(); 
    } else {
        // Diperbaiki: Jika gagal, arahkan kembali ke login.php, bukan ke dashboard
        echo "<script>alert('Username atau Password Salah!'); window.location='login.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PD UG Audio & Visual</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }
        body { background-color: #f7f9fc; display: flex; justify-content: center; align-items: center; height: 100vh; color: #333; }
        .card { background: #ffffff; padding: 2.5rem; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); width: 100%; max-width: 400px; }
        .card h2 { text-align: center; margin-bottom: 0.2rem; font-weight: 600; font-size: 1.5rem; color: #111; }
        .brand-subtitle { text-align: center; font-size: 0.85rem; color: #666; margin-bottom: 2rem; letter-spacing: 1px; text-transform: uppercase; }
        .form-group { margin-bottom: 1.2rem; }
        .form-group input { width: 100%; padding: 0.85rem; border: 1px solid #e1e1e1; border-radius: 6px; font-size: 0.95rem; transition: all 0.3s ease; background-color: #fafafa; }
        .form-group input:focus { border-color: #111; background-color: #fff; outline: none; }
        .btn { width: 100%; padding: 0.9rem; margin-top: 0.5rem; background-color: #111; color: #fff; border: none; border-radius: 6px; font-size: 1rem; font-weight: 500; cursor: pointer; transition: background-color 0.3s ease; }
        .btn:hover { background-color: #333; }
        .link-text { text-align: center; margin-top: 1.5rem; font-size: 0.9rem; color: #666; }
        .link-text a { color: #111; text-decoration: none; font-weight: 600; }
        .link-text a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Masuk Akun</h2>
        <div class="brand-subtitle">PD UG Audio & Visual</div>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn">Masuk</button>
        </form>
        <div class="link-text">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </div>
    </div>
</body>
</html>