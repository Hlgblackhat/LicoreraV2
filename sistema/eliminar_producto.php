<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $ID = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM producto WHERE ID = $ID");
    mysqli_close($conexion);
    header("location: lista_productos.php");
}
?>
