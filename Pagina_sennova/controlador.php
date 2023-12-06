<?php

 // Conectar a la base de datos (debes definir $conexion antes de este punto)
    $conexion = new mysqli("localhost", "root", "", "pagina_sennova");

    // Verificar la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }


if (!empty($_GET["id-feria"])) {

    $id = $_GET["id-feria"];


    $stmt = $conexion->prepare("DELETE FROM feria WHERE id = ?");
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        echo '<div>Registro eliminado correctamente</div>';
        
       
    } else {
        echo '<div>Error al eliminar</div>';
    }
}
?>
<?php

if (!empty($_GET["id-ponente"])) {

    
    $id = $_GET["id-ponente"];

    
    $stmt = $conexion->prepare("DELETE FROM ponente WHERE id = ?");
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        echo '<div>Registro eliminado correctamente</div>';
        
        
       
    } else {
        echo '<div>Error al eliminar</div>';
    }
}
?>

<?php

if (!empty($_GET["id-poster"])) {


   
    $id = $_GET["id-poster"];

    
    $stmt = $conexion->prepare("DELETE FROM poster WHERE id = ?");
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        echo '<div>Registro eliminado correctamente</div>';
        
        
      
    } else {
        echo '<div>Error al eliminar</div>';
    }

}
?>
<?php

if (!empty($_GET["id-robotica"])) {


   
    $id = $_GET["id-robotica"];

    
    $stmt = $conexion->prepare("DELETE FROM robotica WHERE id = ?");
    $stmt->bind_param("i", $id);

    
    if ($stmt->execute()) {
        echo '<div>Registro eliminado correctamente</div>';
        
      
    } else {
        echo '<div>Error al eliminar</div>';
    }
}

$conexion->close();
echo '<script>
setTimeout(() => {
    window.location.href ="administrador.php";
}, 500);
</script>';
?>


