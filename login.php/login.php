<?php
session_start();
$user = $_POST['usuario'] ?? '';
$pass = $_POST['clave'] ?? '';
if($user==='admin' && $pass==='admin123'){
  $_SESSION['user']=$user;
  header('Location: dashboard.php');
} else {
  echo "<script>alert('Usuario o clave incorrecta'); window.location='index.php';</script>";
}
