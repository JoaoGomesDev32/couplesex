<?php
    namespace CoupleSex\Controllers;

    class RegistrarController {

        public function index() {
            
            // Renderiza para criar conta
            \CoupleSex\Views\MainView::render('registrar');

        }
    }

?>