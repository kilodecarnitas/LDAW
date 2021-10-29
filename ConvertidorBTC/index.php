<html>
  <head>
    <title>Convertidor Bitcoins</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
      <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
      <form action="convertidor.php" method="post">
      <h1>Bienvenido al convertidor de Bitcoin</h1>
      <div>
        <label for="cantidad" class="color-1">Cantidad de bitcoins</label>
        <input type="text" name="cantidad" class="color-1" id="cantidad">
      </div>
      <div>
        <label for="divisa" class="color-1">Convertir a: </label>
        <select name="divisa" id="divisa">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="CAD">CAD</option>
          <option value="GBP">GBP</option>
        </select>
      </div>
      <div>
        <input type="submit" name="submit" value="¡Dame el resultado!">
      </div>
      </form>
  </body>
</html>