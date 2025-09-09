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

    public static function listarComunidade() {
        $pdo = \CoupleSex\MySql::connect();
        $comunidade = $pdo->prepare("SELECT * FROM usuarios");
        $comunidade->execute();

        return $comunidade->fetchAll();
    }

    public static function solicitarAmizade($idPara) {

        $pdo = \CoupleSex\MySql::connect();

        // Verificar se já existe pedido de amizade
        $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
        $verificaAmizade->execute(array($_SESSION['id'], $idPara, $idPara, $_SESSION['id']));

        if($verificaAmizade->rowCount() == 0) {
            // Não existe pedido, então podemos inserir
            $insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES (null,?,?,0)");
            if($insertAmizade->execute(array($_SESSION['id'], $idPara))) {
                return true;
            }
        }
        
        return false;
    }

    public static function existePedidoAmizade($idPara) {
        $pdo = \CoupleSex\MySql::connect();

        $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
        $verificaAmizade->execute(array($_SESSION['id'], $idPara, $idPara, $_SESSION['id']));

        if($verificaAmizade->rowCount() == 1) {
            return false;
        } else {
            return true;
        }
    }

}

?>