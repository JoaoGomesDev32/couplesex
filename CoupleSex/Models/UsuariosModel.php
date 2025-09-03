<?php

namespace CoupleSex\Models;

class UsuariosModel {
    public static function emailExists($email) {
        $pdo = \CoupleSex\MySql::connect();
        $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
        $verificar->execute(array($email));

        if($verificar->rowCount() > 0) {
            //Email existe.
            return true;
        } else {
            return false;
        }
    }
}

?>