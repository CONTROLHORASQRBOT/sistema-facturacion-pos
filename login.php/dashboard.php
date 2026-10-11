<?php
session_start();
if(!isset($_SESSION['user'])){ header('Location: index.php'); exit; }
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width">
<title>POS - Menu</title>
<style>
body{font-family:Arial;background:#f0f2f5;margin:0;padding:15px}
.card{background:white;padding:20px;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,.1);margin-bottom:15px}
.grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.btn{display:block;background:#007bff;color:white;padding:18px;text-align:center;border-radius:10px;text-decoration:none;font-weight:bold}
.btn.green{background:#28a745}.btn.orange{background:#fd7e14}.btn.red{background:#dc3545}
h2{margin-top:0}
</style>
</head>
<body>
<div class="card"><h2>👋 Hola <?php echo $_SESSION['user']; ?></h2><p>Sistema POS - Abasto</p></div>
<div class="grid">
<a class="btn" href="ventas.php">🛒 VENTAS</a>
<a class="btn green" href="inventario.php">📦 INVENTARIO</a>
<a class="btn orange" href="caja.php">💰 CAJA</a>
<a class="btn red" href="logout.php">🚪 SALIR</a>
</div>
</body>
</html>