<?php
require_once 'conexion.php';
    session_start();
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT * ";
    $sql .= "FROM `user` ";
    $sql .= "WHERE email = '". $email ."'";
 
    $resultados = $conn->query($sql);
 
    $fila = mysqli_fetch_assoc($resultados);
 
    $emailDB = $fila['email'];
    $passwordDB = $fila['password'];
 
    if($emailDB == $email && $password == $passwordDB){
        $_SESSION['logueado'] = true;
        header("Location: index.html");
    }else{
        $_SESSION['logueado'] = false;
        header("Location: login.php");
    }