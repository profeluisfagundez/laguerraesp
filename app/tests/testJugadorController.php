<?php
require_once '../models/ConexionModel.php'; // Incluir la clase Conexion
require_once '../controller/JugadorController.php'; // Incluir la clase JugadorCRUD

$jugadorController = new JugadorController();

// Crear un nuevo jugador
//$jugadorController->crearJugador("lfagundez", "48225577");

// Leer la información del jugador con el ID pasado por parámetro en el método 
$jugadorCRUD->leerJugador(1);

// Actualizar la información del jugador con ID 1
//$jugadorCRUD->actualizarJugador(1, "profeLuisFagundez", "48225577");

// Verificar la contraseña del jugador con ID 1
//$jugadorCRUD->verificarContra(6, "48225577");

//$jugadorCRUD->leerJugadores();

// Eliminar un jugador con ID 1
//$jugadorCRUD->eliminarJugador(1);
?>
