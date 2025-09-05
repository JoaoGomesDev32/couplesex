<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na Rede Social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>styles/feed.css" rel="stylesheet">
</head>
<body>

    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logo.svg" style="width:120px; height:auto;">
            </div><!--logo-sidebar-->
            <br>
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br>
                <a href="#"><i class="fa-solid fa-rss"></i> Feed</a>
                <a href="#"><i class="fa-regular fa-user"></i> Perfil</a>
                <a href="#"><i class="fa-solid fa-user-group"></i> Amigos</a>
            </div>
        </div>

        </div><!--sidebar-->
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">
                        <!-- Imagem do usuário -->
                    </div>
                    <h3>João Silva</h3>
                    <span>12:47 05/09/2025</span>
                </div>
                <div class="feed-single-post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                </div>
            </div>
        </div><!--feed-->
    </section>

</body>
</html>