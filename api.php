<?php
// Incluir el archivo de conexión a la base de datos
require_once 'conexionAPI.php';

// Endpoint para obtener todos los usuarios
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getUsers') {
    $sql = "SELECT * FROM Usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($users);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "No se encontraron usuarios."));
    }
}
?>