<?php

    namespace CoupleSex\Controllers;

    class ComunidadeController {

        public function index() {

            if(isset($_SESSION['login'])){
                \CoupleSex\Views\MainView::render('comunidade');
            } else {
                \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
            }

        }
    }