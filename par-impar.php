<!DOCTYPE html>
<html>
<head>
    <title>Cod par ou ímpar</title>
</head>
<body>
    <h1>Par ou Impar?</h1>
    <form method="post" action="par-impar.php">
     <label for="num">número:</label>
     <input type="number" step="0.01" name="num" />
     <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
    $num = $_POST["num"];

    if($num % 2 == 0){
        echo "O número é par!";
    }else{
        echo "O número é ímpar!";
 }
    ?>
</body>
</html>