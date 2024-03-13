<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Positivo ou negativo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form method="post">
    <label for="num">número:</label>
    <input type="number" name="num" />
    <input type="submit" name="submit" value="Validar" />
    </form>
    <?php
    $num = $_POST["num"];
 
    if ($num > 0)
{
echo "O número é positivo";
}
    else if ($num < 0)
    {
echo "O número é negativo";
    }
    else
    {
echo "O número é 0";
    }
?>
</body>
</html>
