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

    public static function listarAmizadesPendentes() {
        $pdo = \CoupleSex\MySql::connect();

        $listarAmizadesPendentes = $pdo->prepare("SELECT * FROM amizades WHERE recebeu = ? AND status = 0");

        $listarAmizadesPendentes->execute(array($_SESSION['id']));

        return $listarAmizadesPendentes->fetchAll();
    }

    public static function getUsuarioById($id) {
        $pdo = \CoupleSex\MySql::connect();

        $usuario = $pdo->prepare("SELECT * FROM usuarios WHERE id = ? ");

        $usuario->execute(array($id));

        return $usuario->fetch();
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

    public static function atualizarPedidoAmizade($enviou,$status) {

        $pdo = \CoupleSex\MySql::connect();

        if($status == 0) {
            //recusei o pedido
            $del = $pdo->prepare("DELETE FROM amizades WHERE enviou = ? AND recebeu = ? AND status = 0");

            $del->execute(array($enviou,$_SESSION['id']));

        } else if($status == 1) {
            //aceitei o pedido
            $aceitarPedido = $pdo->prepare("UPDATE amizades SET status = 1 WHERE enviou = ? AND recebeu = ?");

            $aceitarPedido->execute(array($enviou,$_SESSION['id']));

            if($aceitarPedido->rowCount() == 1) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function listarAmigos() {
        $pdo = \CoupleSex\MySql::connect();
    
    // Get friends list with user details using JOIN
    $amigos = $pdo->prepare("
        SELECT u.* FROM amizades a 
        INNER JOIN usuarios u ON (a.enviou = u.id OR a.recebeu = u.id)
        WHERE (a.enviou = ? OR a.recebeu = ?) 
        AND a.status = 1 
        AND u.id != ?
    ");
    
    $amigos->execute(array($_SESSION['id'], $_SESSION['id'], $_SESSION['id']));
    
    return $amigos->fetchAll();

    }

}

?>