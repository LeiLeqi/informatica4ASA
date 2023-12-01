<?php
session_start();

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}
if (isset($_POST['password'])) {
    $_SESSION['login_attempts']++;
    if ($_POST['password'] === 'info 2023') {
        $_SESSION['authenticated'] = true;
    }
    if ($_SESSION['login_attempts'] >= 3) {
        echo "Hai superato il numero di tentativi possibili.";
        exit;
    }
}
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $_SESSION['surname'] = isset($_POST['surname']) ? $_POST['surname'] : '';
    $_SESSION['age'] = isset($_POST['age']) ? $_POST['age'] : '';
    $_SESSION['favorite_sport'] = isset($_POST['favorite_sport']) ? $_POST['favorite_sport'] : '';
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    echo "<html><head><title>Contenuti Riservati</title></head><body style='background-color:" . $_SESSION['color'] . ";'>";
    echo "<h1>Benvenuto, " . $_SESSION['name'] . "!</h1>";
    echo "<h2>Informazioni inserite:</h2>";
    echo "<ul>";
    echo "<li><strong>Nome:</strong> " . $_SESSION['name'] . "</li>";
    echo "<li><strong>Cognome:</strong> " . $_SESSION['surname'] . "</li>";
    echo "<li><strong>Età:</strong> " . $_SESSION['age'] . "</li>";
    echo "<li><strong>Sport Preferito:</strong> " . $_SESSION['favorite_sport'] . "</li>";
    echo "</ul>";
    echo "</body></html>";
} else {
    echo "<html><head><title>Accesso</title></head><body>";
    echo "<form method='post' action=''>";
    echo "<label for='color'>Seleziona il colore di sfondo:</label>";
    echo "<input type='color' name='color' id='color' onchange=\"document.body.style.backgroundColor = this.value;\">";
    echo "<br><br>";
    echo "<label for='name'>Nome:</label>";
    echo "<input type='text' name='name' required>";
    echo "<br><br>";
    echo "<label for='surname'>Cognome:</label>";
    echo "<input type='text' name='surname' required>";
    echo "<br><br>";
    echo "<label for='age'>Età:</label>";
    echo "<input type='text' name='age' required>";
    echo "<br><br>";
    echo "<label for='favorite_sport'>Sport Preferito:</label>";
    echo "<input type='text' name='favorite_sport' required>";
    echo "<br><br>";
    echo "<label for='password'>Password:</label>";
    echo "<input type='password' name='password' required>";
    echo "<br><br>";
    echo "<input type='submit' value='Accedi'>";
    echo "</form>";
    echo "</body></html>";
}
?>

