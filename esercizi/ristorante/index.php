<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Menu Ristorante</title>
</head>
<body style="background-image: url('https://static.vecteezy.com/ti/vettori-gratis/p1/9873871-sfondo-piatto-con-colore-pastello-giallo-buono-per-biglietto-di-auguri-power-point-ecc-vettoriale.jpg'); background-size: cover;"> 
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">  
            <div class="col-auto">
                <img src="https://previews.123rf.com/images/jumpingxiii/jumpingxiii2207/jumpingxiii220700214/188821071-mascotte-di-patate-trucioli-a-spirale-attorcigliata-vettore-di-patate-tornado-illustrazione-fast.jpg" alt="Logo" style="width: 70px; height: 70px;">
            </div>
            <div class="col-auto">
                <h2 class="text-center display-4 font-italic font-weight-bold" style="color:white; -webkit-text-stroke: 1px black;">Menù Ristorante Patate Per Tutti</h2>
            </div>
        </div>
        <div class="row justify-content-center">    
        <?php
  
            $piattiPatate = array(
            array("nome" => "Gateau di Patate", "prezzo" => 14.99, "immagine" => "https://www.dolcidee.it/media/uploads/recipe/5e6bc98909e6a_tmpfb0a524a7e674ec68c549c0e1938ccb5.jpg"),
            array("nome" => "Parmigiana di patate", "prezzo" => 19.99, "immagine" => "https://www.giallozafferano.it/images/229-22972/Parmigiana-di-patate_360x300.jpg"),
            array("nome" => "Patate ripiene", "prezzo" => 9.99, "immagine" => "https://cdn.cook.stbm.it/thumbnails/ricette/144/144690/hd400x225.jpg"),
            array("nome" => "Frico Friuliano", "prezzo" => 7.99, "immagine" => "https://www.ricettedellanonna.net/wp-content/uploads/2015/02/frico-friulano-foto-620x414.jpg"),        
            );

            foreach ($piattiPatate as $piatto) {
                echo '
                <div class="col-md-6" style="width: 80rem";>
                    <img src="' . $piatto["immagine"] . '" class="card-img-top" alt="' . $piatto["nome"] . '"style="width:400px; height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">' . $piatto["nome"] . '</h5>
                        <p class="card-text">Prezzo: €' . $piatto["prezzo"] . '</p>
                        <a href="https://d2x3xhvgiqkx42.cloudfront.net/12345678-1234-1234-1234-1234567890ab/2016/12/22/ae36c0d0-52ea-4a4a-a691-bec9b2458f5b.png" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>';
            }
        ?>
        </div> 
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
