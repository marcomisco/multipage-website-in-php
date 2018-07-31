<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Css externe -->
    <link rel="stylesheet" href="assets/sidbar.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>header</title>
  </head>
  <body>
      <!-- navigation langues -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <header>
                    <nav class="navigationLangues" class="navbar">
                        <ul>
                            <li><a href="http://">Français</a></li>
                            <li><a href="http://">Anglais</a></li>
                            <li><a href="http://">Neerlandais</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
        </div>
    </div>
    <!-- bannière site + input recherche -->
    <div class="container">
        <div class="row bg-info">
            <div class="col-6">
                <div class="banniereDuSite">
                    <img src="https://sites.google.com/site/repaircafeschaerbeek/_/rsrc/1467127355355/config/customLogo.gif?revision=2" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="rechercheDuSite">
                <form id="sites-searchbox-form" action="/site/repaircafeschaerbeek/system/app/pages/search" role="search">
                    <input type="hidden" id="sites-searchbox-scope" name="scope" value="search-site">
                    <input type="text" id="jot-ui-searchInput" name="q" size="20" value="" aria-label="Rechercher dans ce site">
                    <div id="sites-searchbox-button-set" class="goog-inline-block">
                        <div role="button" id="sites-searchbox-search-button" class="goog-inline-block jfk-button jfk-button-standard" tabindex="0" style="user-select: none;">Rechercher dans ce site</div>
                    </div>
                </form>
                </div>
                <div class="vide">

                </div>
            </div>
        </div>
    </div>

    <!-- navigation du site  -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="sidenav">
                    <a href="index.php">Acceuil</a>
                    <a href="media.php">Media</a>
                    <a href="faq.php">FAQ</a>
                    <a href="NousSoutenir.php">Nous soutenir</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>