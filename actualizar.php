<?php
$pedido_id = $_POST['pedido_id'];
$entregado = isset($_POST['entregado']) ? 1 : 0; // Si se marcó el checkbox, se asigna 1, sino 0
$comentario = $_POST['comentario'];

// Actualizar los datos del pedido en la base de datos
$sql = "UPDATE pedidos SET entregado='$entregado', comentario='$comentario' WHERE id='$pedido_id'";

if (mysqli_query($conn, $sql)) {
    echo "El pedido se ha actualizado correctamente";
} else {
    echo "Error al actualizar el pedido: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos

?>