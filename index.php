<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Imprime Escpos</title>
</head>
<body>
  <form action="print.php" method="post">
    <input type="text" name="ip" value="192.168.1.100">
    <input type="text" name="porta" value="9100">
    <hr>
    <textarea name="texto" rows="50" cols="80"></textarea>
    <hr>
    <button type="submit">Imprimir</button>
  </form>
</body>
</html>
