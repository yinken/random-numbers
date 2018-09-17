<?php
  function generateNumber() {
    $randomNumber = rand(100000,999998);
    return $randomNumber;
  }
  function loadFile($file) {
    $contents = file_get_contents($file);
    return $contents;
  }


  $file = 'numbers.txt';
  $array = file($file);
  $current = loadFile($file);
  $newNumber = generateNumber();
  while(in_array($newNumber,$array)) {
    $newNumber++;
  }

  $current .= "\r\n".$newNumber;
  file_put_contents($file,$current);
  $numbers = file($file);
  foreach($numbers as $number) {
    $out .= '<li>'.$number.'</li>';
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" />
    <script>
      function generateNumber() {
        var randomNumber = Math.floor((Math.random() * 1000000) + 100000);
        var container = document.getElementById('output');
        console.log(randomNumber);
        container.innerHTML = randomNumber;
      }
    </script>
  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Random Number Generator
          </h1>
          <h2 class="subtitle">
            Generiert eine zufÃ¤llige 6-stellige Nummer
          </h2>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="columns is-centered">

          <div class="column is-4">

              <div class="notification is-primary box" style="text-align:center;">
                <div class="content is-large"><?php echo $newNumber  ?></div>
              </div>
              <div class="content" style="text-align:center">
                <small>Seite neu laden um eine weitere Nummer zu generieren</small>
              </div>


          </div>

        </div>
      </div>
    </section>
    <section class="section">
      <article class="message is-primary">
        <div class="message-header">
          <p>Und so gehts:</p>
        </div>
        <div class="message-body">
          <div class="content">
            Diese App generiert eine zufÃ¤llige 6-stellige Nummer fÃ¼r die Verwendung bei der Benennung von z.B.
            <ul>
              <li>Bild-namen: XXXXXX-print.jpg</li>
            </ul>
            <strong>Alle generierten Nummer sind einmalig:</strong> Sobald eine Nummer generiert wurde, wird diese Nummer kein zweites Mal von dieser App erstellt.
          </div>
        </div>
      </article>
    </section>

  </body>
</html>
