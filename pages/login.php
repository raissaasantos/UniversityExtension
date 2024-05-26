<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style1.css">
    <title>login Dark/Ligth Mode</title>
    <style>
        


    </style>
</head>
<body>
    <main id="container">
        <form id="login_form">
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            <div id="social_media">
                <a href="#">
                <img src="../assets/imgs/facebook.png" alt="Facebook Logo">
            </a>
            <a href="#">
                <img src="../assets/imgs/google.png" alt="Google Logo">
            </a>
            <a href="#">
                <img src="../assets/imgs/github.png" alt="Github Logo">
            </a>
            </div>
            <div id="inputs">
                <div id="input-box">
                    <label for="e-mail">
                        e-mail
                        <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>  
                        <input type="e-mail" id="email" name="e-mail">

                        </div>
                    </label>
                </div>
                <div id="input-box">
                    <label for="senha">
                        senha
                        <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="senha" id="senha" name="senha">
                        </div>
                        </label>
                        <div id="esqueci-a-senha">
                            <a href="#">
                                esqueceu sua senha?
                            </a>
                    </div>
                </div>
            </div>
           <button type="submit" id="login_button">
            entrar
           </button>
        </form>
    </main>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>