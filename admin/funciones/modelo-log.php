<?php
$accion = $_POST['accion'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($accion === 'login') {
    include '../../includes/funciones/bd_conexion.php';
    try {
        $stmt = $conn->prepare(' SELECT id, usuario, password FROM usuario_admin WHERE usuario = ? ');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->bind_result($nombre_usuario, $id_usuario, $pass_usuario);
        $stmt->fetch();
        if ($nombre_usuario) {
            if (password_verify($password, $pass_usuario)) {
                $_SESSION['nombre'] = $usuario;
                $_SESSION['id'] = $id_usuario;
                $_SESSION['login'] = true;
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $nombre_usuario,
                    'accion' => $accion
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        } else {
            $respuesta = array(
                'error' => 'Usuario no existe'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
    echo json_encode($respuesta);
}

if ($accion === 'crear') {
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    include '../../includes/funciones/bd_conexion.php';
    try {
        $query = "INSERT INTO usuario_admin (usuario, password) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $usuario, $hash_password);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'accion' => $accion
            );
        } else {
            $respuesta = array(
                'respuesta' => strval($usuario),
                'kaka'=> strval($hash_password)
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
