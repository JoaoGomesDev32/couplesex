<?php
    namespace CoupleSex\Controllers;

    class HomeController {

        public function index() {
            
            if(isset($_SESSION['login'])) {
                // Renderiza a home do usuário
                \CoupleSex\Views\MainView::render('home');
            } else {
                // Renderiza para logar
                \CoupleSex\Views\MainView::render('login');
            }

        }
    }

?>