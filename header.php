

<nav class="navbar">

        <?php 
        require_once "../Model/Usuario.php";

        session_start();

        $nome =  $_SESSION['nome'] ?? null;
        $img = $_SESSION['imagem'] ?? null;


    if(isset($nome)){
        Usuario::cartaoUsuario($img, $nome); 
        echo '<a href="./perfil.php?usr='. $_SESSION['codUsu'] . '"><button class="nav-button btn-secondary">Meu Perfil</button></a>';
        echo '<a href="./logout.php"><button class="nav-button btn-red">Sair</button></a>';
        echo '<a href="./feed.php"><button class="nav-button btn-secondary">Feeds</button></a>';

    }else{
        echo '<a href="./feed.php"><button class="nav-button btn-secondary">Feeds</button></a>';
        echo '<a href="./login.php"><button class="nav-button btn-success">Login</button></a>';
        echo '<a href="./novoUsuario.php"><button class="nav-button btn-dark">Novo Usuario</button></a>';
    }

      ?>
</nav>