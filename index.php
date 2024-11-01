<?php 

const API_URL = 'https://whenisthenextmcufilm.com/api';

// inicializar una nueva sesion de curl, $ch = curl handle

$ch = curl_init(API_URL);
//indicar que queremos recibir los datos y no quiero que me muestre todos los datos en panatalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
// ejecutar peticion y resultado

$result = curl_exec($ch);
$data = json_decode($result,true);

curl_close($ch);




?>
<head>
  <meta charset="UTF-8">
  <meta name="descriotion" content="la proxima pelicula de marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>la proxima pelicula de marvel</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
  <section>
    <img src="<?=  $data['poster_url']; ?>" width="300px" alt="imagen de la proxima pelicula de marvel:<?= $data["title"];?>"\
    style="border-radius: 19px;">

  </section>

  <hgroup>
    <h3 > <?= $data["title"];?>,se estrena en  <?= $data["days_until"];?> </h3>
    <p>fecha de estreno : <?= $data["release_date"];?> </p>
    <p>la siguiente pelicula es : <?= $data["following_production"]["title"];?> </p>

  </hgroup>
</main>


<style>
  :root {
    color-scheme: light dark;
  }


 body {
    
    display: grid;
    place-content: center;


  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
    
  }

  hgroup {
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>