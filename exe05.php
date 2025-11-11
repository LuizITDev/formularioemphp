<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
    <h1>Exercício 01</h1>
    <form action="" method="post">
        <label for="raio1"> raio1:</label>
        <input type="number" id="raio1" name="raio1" required><br><br>

        <label for="altura"> altura:</label>
        <input type="number" id="altura" name="altura" required><br><br>

        <input type="submit" value="Verificar">
    </form>
    
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $raio1 = $_POST['raio1'];//pega a indformação do formulário
        $altura = $_POST['altura'];//pega a indformação do formulário
        
        $volume = 3.14 * ($raio1 * $raio1) * $altura;

        echo"<h3>O volume é  : $volume </h3>";

    }
?>    
</body>
</html>