<?php

    namespace CoupleSex\Controllers;

    class ComunidadeController {
        public function index() {
            if(isset($_SESSION['login'])){
                if(isset($_GET['solicitarAmizade'])) {
                    $idPara = (int)$_GET['solicitarAmizade'];
                    if(\CoupleSex\Models\UsuariosModel::solicitarAmizade($idPara)) { // Corrigido nome da classe
                        \CoupleSex\Utilidades::alerta('Pedido de amizade enviado com sucesso!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    } else {
                        \CoupleSex\Utilidades::alerta('Erro ao enviar pedido de amizade!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'comunidade');
                    }
                }

                \CoupleSex\Views\MainView::render('comunidade');
            } else {
                \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }