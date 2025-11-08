<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <form action="" method="post">
        <label for="num1"> produto:</label>
        <input type="number" id="num1" name="num1" required><br><br>


        <input type="submit" value="Verificar">
    </form>
    
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = $_POST['num1'];//pega a indformação do formulário
        $result = $num1 * 20 / 100 + $num1;
        echo"<h3>Os números digitados foram : $result </h3>";

    }
?>    
</body>
</html>