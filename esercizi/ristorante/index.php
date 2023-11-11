<!DOCTYPE html>
<html>
<head>
    <title>Catalogo Ristorante -  La patatona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.wineandfoodtour.it%2Fpatate-al-forno-cosi-buone-e-sfiziose-non-le-hai-mai-provate-finiranno-in-3-minuti%2F&psig=AOvVaw0-W3QjeyoR5rvUv0MTrvNT&ust=1699788937903000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCOjz0bjtu4IDFQAAAAAdAAAAABAE;
            background-size: cover;
            padding-top: 20px;
        }
        header{
            text-align: center;
            margin-bottom: 20px;
        }
        header h1{
            font-size: 56px;
            color: rgb(238, 227, 132);
        }
        header h2{
            font-size: 24px;
        }
    </style>
</head>
<body>
    <header>
        <h1>TRATTORIA LA PATATA</h1>
        <h2 style="text-decoration: underline;">I nostri prodotti gourmet</h2>
    </header>
    <nav>
        <ul>
            <?php

                require_once 'include/config.php';
                require_once '.php';
                $patate = array('Patata ripiena', 'Patate al forno', 'Patate fritte', 'Crocchette di patate', 'Pizzette di patate');
            ?>
        </ul>
    </nav>
        
</html>