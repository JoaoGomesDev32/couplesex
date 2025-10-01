<?php
    namespace CoupleSex\Controllers;

    class HomeController {

        public function index() {

            if(isset($_GET['logout'])) {
                session_unset();
                session_destroy();

                \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
            }
            
            if(isset($_SESSION['login'])) {
                // Renderiza a home do usuário

                //Existe pedido de amizade?

                if(isset($_GET['recusarAmizade'])) {
                    $idEnviou = (int)$_GET['recusarAmizade'];
                    \CoupleSex\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,0);
                    \CoupleSex\Utilidades::alerta('Amizade recusada!');
                    \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                } else if(isset($_GET['aceitarAmizade'])) {
                    $idEnviou = (int)$_GET['aceitarAmizade'];
                    if(\CoupleSex\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,1)) {
                        \CoupleSex\Utilidades::alerta('Amizade aceita!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH);    
                    } else {
                        \CoupleSex\Utilidades::alerta('Erro ao aceitar amizade!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH);    
                    }
                }

                //Existe postagem no feed?
                if(isset($_POST['post_feed'])) {
                    if(!empty($_POST['post_content'])) {
                        \CoupleSex\Models\HomeModel::postFeed($_POST['post_content']);
                        \CoupleSex\Utilidades::alerta('Post realizado com sucesso!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                    } else {
                        \CoupleSex\Utilidades::alerta('Post não pode ser vazio!');
                        \CoupleSex\Utilidades::redirect(INCLUDE_PATH);
                    }
                }


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
                            $_SESSION['id'] = $dados['id'];
                            $_SESSION['nome'] = explode(' ', $dados['nome'])[0];
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