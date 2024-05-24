<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assembléia de Deus Ministério O Atalaia - Login</title>
  <style>
    /* Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
      overflow-x: hidden; /* Prevent horizontal scrolling */
    }

    /* Navbar Styles */
    .nav_logo {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav_logo img {
      height: 50px;
    }

    .nav_logo span {
      font-size: 20px;
      font-weight: bold;
    }

    .nav_logo a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      border: 2px solid white;
      padding: 5px 10px;
      border-radius: 4px;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .nav_logo a:hover {
      background-color: white;
      color: #4CAF50;
      border-color: #4CAF50;
    }

    /* Form Container Styles */
    .main-content {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 20px;
    }

    .form-container {
      background: #fff;
      padding: 40px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .form-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .form-center-card {
      width: 100%;
    }

    .form-control {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .group-input {
      margin-bottom: 20px;
      width: 100%;
    }

    .group-input label {
      margin-bottom: 8px;
      font-weight: bold;
      color: #333;
      display: block;
      text-align: left;
    }

    .inputBox {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      width: 100%;
    }

    .btnSend {
      padding: 12px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
    }

    .btnSend:hover {
      background-color: #45a049;
    }

    .additional-options {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
      width: 100%;
    }

    .additional-options a {
      color: #4CAF50;
      text-decoration: none;
      font-size: 14px;
    }

    .additional-options a:hover {
      text-decoration: underline;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
      .form-container {
        padding: 20px;
      }

      .nav_logo {
        flex-direction: column;
        text-align: center;
      }

      .nav_logo img {
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <nav class="nav_logo">
    <img src="../img/logo.png" alt="Assembléia de Deus Ministério O Atalaia" width="60">
    <span>Assembléia de Deus Ministério O Atalaia</span>
    <a href="pages/login.php">Login</a>
  </nav>
  <div class="main-content">
    <div class="form-container">
      <h2>Login</h2>
      <div class="form-center-card">
        <form class="form-control" id="loginForm">
          <div class="group-input">
            <label for="email">Email</label>
            <input type="email" class="inputBox" name="email" id="email" placeholder="Seu email" required>
          </div>
          <div class="group-input">
            <label for="password">Senha</label>
            <input type="password" class="inputBox" name="password" id="password" placeholder="Sua senha" required>
          </div>
          <div class="group-input">
            <button type="submit" class="btnSend">Entrar</button>
          </div>
          <div class="additional-options">
            <a href="#">Esqueceu a senha?</a>
            <a href="#">Registrar-se</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      // Basic validation (you can add more complex validation as needed)
      if (email === '' || password === '') {
        alert('Por favor, preencha todos os campos.');
      } else {
        alert('Login bem-sucedido!'); // Placeholder action, replace with actual login logic
      }
    });
  </script>
</body>
</html>
