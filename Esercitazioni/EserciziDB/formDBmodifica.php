<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Una breve descrizione del contenuto della pagina.">
    <meta name="keywords" content="html, template, vuoto, base">
    <meta name="author" content="Il Tuo Nome">

    <title>Titolo della Tua Pagina Vuota</title>

</head>

<body>

<form method="post" action="stesso_file.php">
  <input type="hidden" name="azione" value="modifica">
  <input type="hidden" name="id" value="<?php echo $utente['id']; ?>">
  Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($utente['nome']); ?>"><br>
  Email: <input type="email" name="email" value="<?php echo htmlspecialchars($utente['email']); ?>"><br>
  <input type="submit" value="Modifica">
</form>


</body>

</html>