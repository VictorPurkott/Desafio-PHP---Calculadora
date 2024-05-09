<!-- Autores: Victor Gabriel Purkott Coelho & Brayan Carvalho -->

<?php
    require_once "script.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora PHP</title>
</head>
<body>
    <div class="container">
        <div class="bolhas">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:18;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
        </div>
    </div>
    <div class="calculadora">
        <h2>Calculadora - PHP</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="num1">Insira o 1º Número:</label><br>
            <input type="number" id="num1" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>" ><br><br>
            <label for="op">Escolha o Operador:</label><br>
            <select id="op" name="op">
                <option value="+" <?php if(isset($_POST['op']) && $_POST['op'] == '+') echo 'selected'; ?>>+</option>
                <option value="-" <?php if(isset($_POST['op']) && $_POST['op'] == '-') echo 'selected'; ?>>-</option>
                <option value="*" <?php if(isset($_POST['op']) && $_POST['op'] == '*') echo 'selected'; ?>>*</option>
                <option value="/" <?php if(isset($_POST['op']) && $_POST['op'] == '/') echo 'selected'; ?>>/</option>
                <option value="^" <?php if(isset($_POST['op']) && $_POST['op'] == '^') echo 'selected'; ?>>^</option>
                <option value="n!" <?php if(isset($_POST['op']) && $_POST['op'] == 'n!') echo 'selected'; ?>>n!</option>
            </select><br><br>
            
            <label for="num2">Insira o 2º Número:</label><br>
                <input type="number" id="num2" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>" ><br><br>
                    <label for="resultado">Resultado:</label><br>
                        <input type="text" id="resultado" name="resultado" value="<?php if(isset($result)) echo $result; ?>" readonly><br><br>
                    <input type="submit" name="calcular" value="Calcular">
                <input type="submit" name="salvar_pegar" value="M">
            <input type="submit" name="limpar" value="Limpar Histórico">
        </form>

        <h2>Histórico de Operações</h2>
        <textarea readonly rows="10" cols="40" style="resize: none;"><?php
            if (!empty($_SESSION['historico'])) {
                foreach ($_SESSION['historico'] as $calc) {
                    echo "$calc\n";
                }
            } else {
                echo "Nenhuma operação realizada até o momento.";
            }
        ?></textarea>
    </div>
</body>
</html>
