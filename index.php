<?php
session_start();
if(isset($_SESSION['user'])) header('Location: dashboard.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>POS Pro - Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>body{background:#0f172a;display:flex;align-items:center;justify-content:center;height:100vh}.card{width:380px;box-shadow:0 10px 30px rgba(0,0,0,.3);border-radius:15px}</style>
</head>
<body>
<div class="card p-4">
<h3 class="text-center">🧾 POS Pro</h3>
<p class="text-center text-muted small">Sistema Facturación</p>
<form action="login.php" method="POST">
<input class="form-control mb-3" name="usuario" placeholder="Usuario: admin" required>
<input type="password" class="form-control mb-3" name="clave" placeholder="Clave: admin123" required>
<button class="btn btn-primary w-100">Entrar al Sistema</button>
</form>
<p class="mt-3 small text-center text-muted">Demo: admin / admin123</p>
</div>
</body>
</html>
