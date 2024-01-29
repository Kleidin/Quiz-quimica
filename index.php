<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WooQuiz</title>
</head>
<body>
    <main class="main">
        <header class="header">
            <a href="#" class="logo">WooQuiz.</a>
            <nav class="navbar">
                <a href="#" class="active">Inicio</a>
                <a href="#">Sobre</a>
                <a href="#">Serviços</a>
                <a href="cadastro.php">Login</a>
            </nav>
        </header>

        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <h1>Quiz Quimica</h1>
                    <div class="quiz-header">
                        <div class="timer-container">
                            <div class="timer-div">
                                <img src="img/timer-removebg-preview.png" width="29px">
                                <span class="timer"></span>
                            </div>
                        </div>
                        <span class="header-score">potuação: 0 / 5</span>
                    </div>

                    <h2 class="question-text">O que é um átomo?</h2>
                    <div class="option-list">
                       <!-- <div class="option">
                            <span>A. A menor partícula de um elemento químico</span>
                        </div>
                        <div class="option">
                            <span>B. Uma substância pura</span>
                        </div>
                        <div class="option">
                            <span>C. Uma reação química</span>
                        </div>
                        <div class="option">
                            <span>D. Um composto químico</span>
                        </div> -->
                    </div>

                    <div class="quiz-footer">
                        <span class="question-total">1 de 5 Perguntas</span>
                        <button class="next-btn">Proxima</button>
                    </div>
                </div>

                <div class="result-box">
                    <h2>Resultado Quiz!!</h2>
                    <div class="percentage-container">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>

                        <span class="score-text">Voce conseguiu 0 de 5</span>
                    </div>
                    <div class="buttons">
                        <button class="tryAgain-btn">Tentar Denovo</button>
                        <button class="goHome-btn">Voltar ao Menu</button>
                    </div>
                </div>
            </section>

            <section class="home">
                <div class="home-content">
                    <h1>WooQuiz</h1>
                    <p>Bem-vindos ao WooQuiz, nos criamos esse quiz para testar seu conhecimento de Quimica, vamos lá.</p>
                    <button class="start-btn">Iniciar Quiz</button>
                </div>
            </section>
    </div>
    </main>
    
    <div class="popup-info">
        <h2>Guia do Quiz</h2>
        <span class="info">1. Ao entrar no Quiz, selecione uma das 4 alternativas.</span>
        <span class="info">2. Apenas uma das 4 alternativas estará correta.</span>
        <span class="info">3. Ao acertar a resposta certa ficará verde.</span>
        <span class="info">4. Caso a resposta esteja errada ela ira ficar vermelha.</span>
        <span class="info">5. Ao final do Quiz um percentual de acertos aparecerá.</span>
        <div class="btn-group">
            <button class="info-btn exit-btn">Sair Quiz</button>
            <a href="#" class="info-btn continue-btn">Continuar</a>
        </div>
    </div>




    <script src="questions.js"></script>
    <script src="script.js"></script>
</body>
</html>