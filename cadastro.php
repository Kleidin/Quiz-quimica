<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css">
    <title>WooLogin</title>
</head>
<body>
    <div class="wrapper">
    <nav class="nav">
    <div class="nav-logo">
        <p>WooQuiz</p>
    </div>
    <div class="nav-menu">
        <ul>
            <li><a href="#" class="link active">Home</a></li>
            <li><a href="#" class="link">Blog</a></li>
            <li><a href="#" class="link">Services</a></li>
            <li><a href="#" class="link">About</a></li>
        </ul>
    </div>
    <div class="nav-meunu-btn">
        <i class="bx bx-menu"></i>
    </div>
    </nav>
    <div class="form-box">
        <div class="register-cointainer" id="register">
            <div class="top">
                <span>Já tem conta?<a href="#" onclick="login()">Login</a></span>
                <header>Registre-se</header>
            </div>
            <form action="formulario_processa.php" method="post">
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Nome" id="Nome">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Sobrenome" id="Sobrenome">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" id="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Senha" id="Senha">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Registrar">
            </div>
        </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">Lembrar-me</label>
                </div>
                <div class="two">
                    <label><a href="#">Termos & condições</a></label>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>