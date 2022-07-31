<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./stylesenha.css">
    <script src="./scriptsenha.js" defer></script>

    <title>Delas para Elas - Nova Senha</title>
</head>
<body>
    
    <main>
        <section class="login">

            <div class="wrapper">
                <div class="imagen__logo">
                    <img src="./img/1655574369643.png" alt="logo">
                </div>
                    <form class="login__label" action="cadastro.php" method="POST">
                    <h1 class="login__title">Nova Senha</h1>

                    <label class="login__label">
                        <span> Nome </span>
                        <input type="text" name="nome" class="input">
                    </label>
        
                    <label class="login__label">
                        <span> senha </span>
                        <input type="password" name="senha" class="input">
                    </label>

            
                <div class="login__icons">
                    <button type="button" class="icons__button">
                    <img src="./img/google-icone.png" alt="google"></button>

                    <button type="button" class="icons__button">
                    <img src="./img/logo-facebook.png" alt="facebook"></button>
                </div>

         
                <label class="login__label--checkbox">
                    <input type="checkbox" class="input--checkbox">
                    Manter login
                </label>
            </div>
      
            <div class="wrapper">
                <button type="button" class="login__button" disabled>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/>
                  </svg>
                </button>

            </form>
          
                <p>Já tem cadastro? <a href="./cadastro.php" class="login__link">Cadastre-se</a></p>
                <p>Fazer login<a href="./login.php" class="login__link"> Login </a></p>
            </div>

        </section>
        <section class="wallpaper"></section>
    </main>
</body>
</html>