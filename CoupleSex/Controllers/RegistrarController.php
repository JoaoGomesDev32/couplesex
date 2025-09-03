<?php
    namespace CoupleSex\Controllers;

    class RegistrarController {

        public function index() {
            if (isset($_POST['registrar'])) {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $confirmarsenha = $_POST['confirmar_senha'];

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    \CoupleSex\Utilidades::alerta('Email inválido!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'registrar');
                } else if(strlen($senha) < 6) {
                    \CoupleSex\Utilidades::alerta('Senha muito curta!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'registrar');
                } else if(\CoupleSex\Models\UsuariosModel::emailExists($email)){
                    \CoupleSex\Utilidades::alerta('Email já cadastrado!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'registrar');
                } else if($senha != $confirmarsenha) {
                    \CoupleSex\Utilidades::alerta('As senhas não coincidem!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'registrar');
                } else {
                    //Registrar usuário
                    $senha = \CoupleSex\Bcrypt::hash($senha);
                    $registro = \CoupleSex\MySql::connect()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
                    $registro->execute(array(
                        $nome,
                        $email,
                        $senha
                    ));

                    \CoupleSex\Utilidades::alerta('Conta criada com sucesso!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH.'login');
                }
            }
            
            \CoupleSex\Views\MainView::render('registrar');
        }
    }

?>