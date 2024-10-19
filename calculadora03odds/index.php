<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Arbitragem 03 ODDS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora Arbitragem 03 ODDS</h1>
        <form id="surebetForm">
            <!-- Campo para Odd 1 -->
            <div class="input-group">
                <label for="odd1">Odd 1:</label>
                <input type="number" step="0.01" id="odd1" name="odd1" oninput="atualizarCalculo()" required>
                <span id="retorno1" class="retorno"></span>
            </div>

            <!-- Campo para Odd 2 -->
            <div class="input-group">
                <label for="odd2">Odd 2:</label>
                <input type="number" step="0.01" id="odd2" name="odd2" oninput="atualizarCalculo()" required>
                <span id="retorno2" class="retorno"></span>
            </div>

            <!-- Novo Campo para Odd 3 -->
            <div class="input-group">
                <label for="odd3">Odd 3:</label>
                <input type="number" step="0.01" id="odd3" name="odd3" oninput="atualizarCalculo()">
                <span id="retorno3" class="retorno"></span>
            </div>

            <!-- Valor total a ser investido -->
            <div class="input-group">
                <label for="total">Valor Total a Investir (R$):</label>
                <input type="number" step="0.01" id="total" name="total" oninput="atualizarCalculo()" required>
            </div>

            <!-- Botão para Calcular -->
            <button type="button" onclick="atualizarCalculo()">Calcular</button>
        </form>

        <!-- Resultado do Cálculo -->
        <div id="resultado" class="resultado">
            Não há Aposta com essas odds.
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
