<?php
    session_start();
    
    include ('../../global/conexion.php');
  

   
    $id = $_POST['id']; 
    $subtotal = $_POST['subtotal'];

    $sql = "UPDATE ventas SET subtotal = '$subtotal',descontado = 0 WHERE id = '$id'";


    $sentencia = $pdo->prepare( $sql );
    $sentencia -> execute();
    $register = $sentencia->fetchAll(PDO::FETCH_ASSOC);


    if( !$register ){   
        header('location:pagos1.php');
    } 
?>



