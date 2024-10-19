<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Limite de Aposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora Limite de Aposta</h1>
        <form id="surebetForm">
            <div class="input-group">
                <label for="odd1">Odd 1:</label>
                <input type="number" step="0.01" id="odd1" name="odd1" oninput="atualizarCalculo()" required>
                <span id="retorno1" class="retorno"></span>
            </div>

            <div class="input-group">
                <label for="odd2">Odd 2:</label>
                <input type="number" step="0.01" id="odd2" name="odd2" oninput="atualizarCalculo()" required>
                <span id="retorno2" class="retorno"></span>
            </div>

            <!-- Novo campo para valor fixo da aposta na Odd 1 -->
            <div class="valor-fixo">
                <label for="valorFixo">Limite Máximo R$):</label>
                <input type="number" step="0.01" id="valorFixo" name="valorFixo" oninput="atualizarCalculo()" required>
            </div>

            <button type="button" onclick="atualizarCalculo()">Calcular</button>
        </form>

        <div id="resultado" class="resultado">
            Não há Ganhos com essas odds.
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
