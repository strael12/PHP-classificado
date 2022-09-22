<?php 
session_start();


// Trava o usuário caso ele não tenha uma sessão válida.
if(!isset($_SESSION['cLogin'])){    
    header("Location: login.php");
}