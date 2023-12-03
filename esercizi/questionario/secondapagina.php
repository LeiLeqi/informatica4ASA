<!DOCTYPE html>
<html>
<head>
    <title>Informazioni account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://dogdaysofsummer.at/blog/wp-content/uploads/2019/08/Divas-Vintage-Store-Thrift-Guide-Ljubljana-Dogdays-of-Summer-Vintage-graz-thrift-shop-second-hand-wien-austria-9.jpg');
            background-size: cover;
        }
        .content-box {
            background-color:<?=$_GET['csfondo']?>;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
<body>
    <div class="content-box">
    <h1 class="text-left display-4 font-italic font-weight-bold" style="color:white; -webkit-text-stroke: 1px black;">SECOND HAND SHOP</h1>
    <?php
        $pas="info2023";
        if ($_GET['password'] == $pas) {
            echo "<h1>Benvenuto  " . $_GET['nome'] . "!</h1>";
            echo "<ul>";
            echo "<li><b>Nome:</b> " . $_GET['nome'] . "</li>";
            echo "<li><b>Cognome:</b> " . $_GET['cognome'] . "</li>";
            echo "<li><b>Età:</b> " . $_GET['eta'] . "</li>";
            echo "<li><b>Tessuto Preferito:</b> " . $_GET['tessuto'] . "</li>";
            echo "</ul>";
        } 
        else {
            echo "<p>Accesso negato. Controlla la password.</p>";
            echo "<a href='index.html'>Torna alla pagina di accesso</a>";
        }
    ?>

</body>
</html>
