<html>
  <head>
     <title>Convertidor Bitcoin</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
     <style>
      <?php include 'style.css'; ?>
    </style>
  </head>
  <body>
  <?php
    if(isset($_POST['cantidad']) && is_numeric($_POST['cantidad']) && isset($_POST['divisa'])) {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/ticker");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $precios = json_decode(curl_exec($ch), true);
      curl_close($ch);
  ?>
  <h1>Tus resultados</h1>
  <div><strong><?php echo $_POST['cantidad']; ?> BitCoins a <?php echo $_POST['divisa']; ?> es igual a:</strong> <?php echo $precios[$_POST['divisa']]['sell']*$_POST['cantidad']; ?><?php echo $precios[$_POST['divisa']]['symbol']; ?></div>
  <?php } else { ?>
  <div >Por favor introduce al menos un valor. <a href="index.php">Regresar a la página anterior.</a></div>
  <?php } ?>
  </body>
</html>