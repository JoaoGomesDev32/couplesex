<?php
    namespace CoupleSex\Controllers;

    class HomeController {

        public function index() {
            
            if(isset($_SESSION['login'])) {
                // Renderiza a home do usuário
                \CoupleSex\Views\MainView::render('home');
            } else {
                // Renderiza para logar
                if(isset($_POST['login'])) {
                    $login = $_POST['email'];
                    $senha = $_POST['senha'];

                    // Verificar no banco de dados
                    $verifica = \CoupleSex\MySql::connect()->prepare('SELECT * FROM usuarios WHERE email = ?');
                    $verifica->execute(array($login));

                    if($verifica->rowCount() == 0) {
                        // Não existe esse usuário
                        \CoupleSex\Utilidades::alerta('Não existe usuario com esse email!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                    } else {
                        $dados = $verifica->fetch(); // Busca os dados uma única vez
                        $senhaBanco = $dados['senha'];
                        if(\CoupleSex\Bcrypt::check($senha, $senhaBanco)) {
                            // Logamos com sucesso
                            $_SESSION['login'] = $dados['email']; // Usa os dados já buscados
                            \CoupleSex\Utilidades::alerta('Logado com sucesso!');
                            \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                        } else {
                            // Senha incorreta
                            \CoupleSex\Utilidades::alerta('Senha incorreta!');
                            \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                        }
                    }
                }
                \CoupleSex\Views\MainView::render('login');
            }
        }
    }
?>