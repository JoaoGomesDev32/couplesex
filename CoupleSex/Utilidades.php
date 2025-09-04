<?php

    namespace CoupleSex;

    class Utilidades {
        
        public static function redirect($url) {
        echo '<script>';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        die();
    }

    public static function alerta($mensagem) {
        echo '<script>';
        echo 'alert("'.$mensagem.'");';
        echo '</script>';
    }

    }

?>