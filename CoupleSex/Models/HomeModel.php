<?php
    namespace CoupleSex\Models;
    
    class HomeModel {

        public static function postFeed($post) {
            $pdo = \CoupleSex\MySql::connect();
            $post = strip_tags($post);
            //TODO: Substituir texto de imagem pela tag
            // Inserir o post
            $postFeed = $pdo->prepare("INSERT INTO `posts` VALUES (null,?,?,?)");
            $postFeed->execute(array($_SESSION['id'],$post,date('Y-m-d H:i:s',time())));

            // Atualizar último post do usuário
            $atualizaUsuario = $pdo->prepare("UPDATE usuarios SET ultimo_post = ? WHERE id = ?");
            $atualizaUsuario->execute(array(date('Y-m-d H:i:s',time()), $_SESSION['id']));
        }

    }
?>