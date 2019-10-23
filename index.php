<?php
$ipAddres=$_SERVER['REMOTE_ADDR'];

 
$info = exec("uname -a");
settype($info, 'string');
$weight = exec("python3 obecnawaga.py");
echo <<<EOT
<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Smart | Waga</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  <script src="https://kit.fontawesome.com/d53eb6b644.js" crossorigin="anonymous"></script>
  </head>
  <body>
        <header>
                <a href="#main-menu"
                   id="main-menu-toggle"
                   class="menu-toggle">
                  <span class="fa fa-bars" aria-hidden="true"></span>
                </a>
                
                <h1 class="logo">Smart | Waga</h1>
                
                <nav id="main-menu" class="main-menu" aria-label="Main menu">
                  <a href="#main-menu-toggle"
                     id="main-menu-close"
                     class="menu-close">
                    <span class="fa fa-close" aria-hidden="true"></span>
                  </a>
                  <ul>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Ustawienia</a></li>
                    <li><a href="#">Historia</a></li>
                    <li><a href="#">Informacje</a></li>
                  </ul>
                </nav>
                <a href="#main-menu-toggle"
                   class="backdrop"
                   tabindex="-1"
                   aria-hidden="true" hidden></a>
              </header>
              <article>
                <h2>$weight</h2>
                <h3>$ipAddres</h3>
                  <p>$info</p>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
EOT;
?>