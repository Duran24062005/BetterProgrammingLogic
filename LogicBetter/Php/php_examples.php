<?php

// Variables básicas
$nombre = "Usuario";
$edad = 25;

// Función simple
function saludar($nombre) {
    return "¡Hola, " . $nombre . "!";
}

// Clase básica
class Usuario {
    private $nombre;
    private $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Ejemplo de uso
$mensaje = saludar($nombre);
echo $mensaje;

$usuario = new Usuario("Juan", "juan@email.com");
echo "\nNombre del usuario: " . $usuario->getNombre();
?>
