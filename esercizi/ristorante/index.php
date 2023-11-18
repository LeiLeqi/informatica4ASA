<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Menu Ristorante</title>
</head>
<body> 
    <div class="container mt-5">
        <h2>Menu Ristorante PatatePerTutti</h2>

        <?php
  
            $piattiPatate = array(
            array("nome" => "Gateau di Patate", "prezzo" => 14.99, "immagine" => "https://www.giallozafferano.it/images/165-16591/Gateau-di-patate_450x300.jpg"),
            array("nome" => "Parmigiana di patate", "prezzo" => 19.99, "immagine" => "https://www.giallozafferano.it/images/229-22972/Parmigiana-di-patate_360x300.jpg"),
            array("nome" => "Patate ripiene", "prezzo" => 9.99, "immagine" => "https://cdn.cook.stbm.it/thumbnails/ricette/144/144690/hd400x225.jpg"),
            array("nome" => "Frico Friuliano", "prezzo" => 7.99, "immagine" => "https://www.ricettedellanonna.net/wp-content/uploads/2015/02/frico-friulano-foto-620x414.jpg"),        
            );

            foreach ($piattiPatate as $piatto) {
                echo '
                <div class="col-md-6" style="width: 80rem";>
                    <img src="' . $piatto["immagine"] . '" class="card-img-top" alt="' . $piatto["nome"] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $piatto["nome"] . '</h5>
                        <p class="card-text">Prezzo: $' . $piatto["prezzo"] . '</p>
                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>';
            }
        ?>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
