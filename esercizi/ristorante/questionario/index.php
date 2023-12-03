<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina di accesso</title>
</head>
<body>
    <form action="secondapagina.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="cognome">Cognome:</label><br>
        <input type="text" id="cognome" name="cognome"><br>
        <label for="età">Età:</label><br>
        <input type="number" id="età" name="età"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br>
        <label for="csfondo">Colore sfondo:</label>
        <input type="color" name="csfondo"><br>
        <input type="button" value="Login">
    </form>
</body>
</html>
