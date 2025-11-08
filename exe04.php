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
        <label for="num1"> número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2"> número 2: </label>
        <input type="number" id="num2" name="num2" required><br><br>

    

        <input type="submit" value="Verificar">
    </form>
    
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = $_POST['num1'];//pega a indformação do formulário
        $num2 = $_POST['num2'];
    }
        
    if ($num1 > $num2){
        
        echo"<h3>O numero maior é: $num1 </h3>";

    }else if ($num1 < $num2){

        echo "<h3> o numero maior é : $num2";
    }

   
    
?>    
</body>
</html>