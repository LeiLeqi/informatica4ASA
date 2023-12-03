<!DOCTYPE html>
<html>
<head>
    <title>Contenuti Riservati</title>
</head>
<body style="background-color:<?php echo $_GET['background_color'] ?? '#ffffff'; ?>;">
<?php
$pas="info2023";
if ($_GET['password'] == $pas) {
    echo "<h1>Benvenuto!</h1>";
    echo "<ul>";
    echo "<li><strong>Nome:</strong> " . $_GET['nome'] . "</li>";
    echo "<li><strong>Cognome:</strong> " . $_GET['cognome'] . "</li>";
    echo "<li><strong>Età:</strong> " . $_GET['eta'] . "</li>";
    echo "<li><strong>Sport Preferito:</strong> " . $_GET['sport'] . "</li>";
    echo "</ul>";
} else {
    echo "<p>Accesso negato. Controlla la password.</p>";
    echo "<a href='index.html'>Torna alla pagina di accesso</a>";
}
?>

</body>
</html>
