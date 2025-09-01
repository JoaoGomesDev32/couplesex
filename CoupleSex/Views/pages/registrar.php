<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na Rede Social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>styles/style.css" rel="stylesheet">
</head>
<body>
   
    <div class="sidebar"></div>

    <div class="form-container-login">
        <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logo.svg" style="width:120px; height:auto;">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div><!--logo-chamada-login-->

        <div class="form-login">
            <h3 style="text-align:center;">Crie sua Conta!</h3>
            <form method="post">
                <input type="text" name="nome" placeholder="Seu nome...">
                <input type="text" name="usuario" placeholder="Seu usuário...">
                <input type="email" name="email" placeholder="Seu email...">
                <input type="password" name="senha" placeholder="Sua senha...">
                <input type="password" name="confirmar_senha" placeholder="Confirme sua senha...">
                <input type="submit" name="acao" value="Criar Conta">
            </form>
            <p><a href="<?php echo INCLUDE_PATH ?>login">Já possui uma conta? Clique aqui</a></p>
        </div><!--form-login-->
    </div>

</body>
</html>