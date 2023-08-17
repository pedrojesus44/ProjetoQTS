<!DOCTYPE html>
<?php
require_once('controller.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .calculator-card {
            padding: 20px;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px; /* Defina a largura máxima desejada */
            margin: 0 auto; /* Centralizar horizontalmente */
        }
        .calculator-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-calculate {
            width: 100%;
        }

        body {
            background-image: url('https://blog.cobasi.com.br/wp-content/uploads/2021/09/Design-sem-nome-69.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
    <title>Calculadora</title>
</head>
<body>
    <div class="calculator-container">
        <div class="container card calculator-card">
            <h1 class="calculator-title">Calculadora</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="data-admissao" class="form-label">Data de admissão</label>
                    <input type="date" name="data_admissao" class="form-control" id="data-admissao" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="data-demissao" class="form-label">Data de demissão</label>
                    <input type="date" name="data_demissao" class="form-control" id="data-demissao">
                </div>
                <div class="mb-4">
                    <label class="form-label" for="resultado">Valor</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" class="form-control" id="resultado" value="<?php echo isset($valorTotal) ? number_format($valorTotal, 2, ',', '.') : ''; ?>" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-calculate">Calcular</button>
            </form>
        </div>
    </div>
</body>
</html>