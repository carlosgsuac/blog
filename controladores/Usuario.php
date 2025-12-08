<?php
class Usuario
{
    /*static public function listarRespuestaPregunta($tabla, $columna, $valor)
    {
        $respuesta = RespuestaModel::listar($tabla, $columna, $valor);
        return $respuesta;
    }*/

    public function registrarUsuario()
    {
         if (isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['correo']) && isset($_POST['clave']) && isset($_POST['repita_clave'])) {

            if ($_POST['clave'] == $_POST['repita_clave']) {

            } else {
                echo '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden</div>';
            }
        }
    }

    static private function validarEntrada($input)
    {
        return preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓ¡Ú¿?!,. ]+$/', $input);
    }

}
