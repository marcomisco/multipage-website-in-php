<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- local css style -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <?php include('header.php'); ?>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
              <?php include('sidebar.php'); ?>

              </div>
              <div class="col-md-8">
                  <h3>Questions - Réponses</h3>
                  <h4>Qu'est-ce qu'un Repair Café ? Qui êtes-vous ?</h4>
                  <blockquote>
                    Le Repair Café est un endroit où l'on peut venir réparer un objet
                    gratuitement avec l'aide de bénévoles expert en la matière. <br/>
                    C'est également un lieu de rencontre et d'échanges entre visiteurs
                    et bénévoles. Notre Repair Café Schaerbeek a été créé en avril 2013 par <br/>
                    un groupe de citoyens motivés et intéressés par le concept.
                  </blockquote>
                  <h4>Qui peut venir au Repair Café ?</h4>
                  <blockquote>
                    Tout le monde ! Le Repair Café est ouvert à tous, car en plus
                    d'être un endroit où l'on répare, c'est aussi un lieu convivial <br/>
                    où l'on peut rencontrer des personnes et apprendre et partager
                    des connaissances.
                  </blockquote>
                  <h4>Quand et où a lieu le Repair Café Schaerbeek ?</h4>               
                  <blockquote>
                    Notre Repair Café a lieu tous les deuxièmes dimanches du mois, rue des coteaux,
                    de 14 à 18h. Vu le succès de certains ateliers, <br/>
                    les inscriptions sont susceptibles d'être clôturées assez tôt. <br/>
                    Il y a aussi d'autres Repair Cafés à Bruxelles et en Belgique avec des jours d'ouverture différents.
                  </blockquote>
                  <h4>Que coûte une réparation ?</h4>
                  <blockquote>
                    C'est totalement gratuit ! Les organisateurs et réparateurs du
                    Repair Café sont tous bénévoles. Les quelques frais <br/>
                    d'organisation et de gestion sont financés par les dons récoltés 
                    durant l'évènement.
                  </blockquote>
                  <h4>Peut-on vous soutenir ou vous aider ?</h4>
                  <blockquote>
                  Tout aide est toujours la bienvenue pour organiser nos ateliers, <br/>
                  consultez notre page de soutien pour voir comment vous pouvez nous aider.
                  </blockquote>
                  <h4>Quels types d'objets pouvez-vous réparer ?</h4>
                  <blockquote>
                    Lors de nos sessions nous avons différents ateliers de réparation pour
                    des objets comme les appareils électriques, les vêtements ou encore les vélos. <br/>
                    Vous trouverez plus d'informations sur les différents ateliers sur notre <br/> 
                    page de conseils pour préparer votre visite.
                  </blockquote>
                  <h4>Est-ce que mon objet pourra être réparé ?</h4>
                  <blockquote>
                    Il n'est pas possible de savoir à l'avance si un objet est réparable.
                    Les causes d'une même panne pouvant être multiples, seul le bénévole qui
                    vous accueillera sur place pourra, selon ses connaissances, <br/>
                    évaluer si l'objet est réparable. Les bénévoles du Repair Café Schaerbeek
                    ne sont pas toujours les mêmes d'une session à l'autre et chacun a son domaine
                    d'expertise. Dans la pratique, une majorité d'objets sont en général <br/>
                    réparés lors des sessions. Plus d'information sur les différents ateliers
                    lors de nos session sur notre page de conseils pour préparer votre visite.
                  </blockquote>
                  <h4>Puis-je prendre rendez-vous avec un réparateur ?</h4>
                  <blockquote>
                    Non, le Repair Café ouvre à 14h et les visiteurs sont invités aux
                    tables de réparation dans leur ordre d'arrivée. Les files pouvant <br/>
                    parfois êtres longues pour certains ateliers, il nous arrive
                    d'arrêter les inscriptions plus tôt dans l'après-midi.

                  </blockquote>
                  <h4>Pouvez-vous effectuer une réparation à domicile ?</h4>
                  <blockquote>
                    Le Repair Café ne prévoit pas cela. Tous les réparateurs du Repair
                    Café sont des bénévoles et ne s'engagent que pour la session et ils
                    ne sont également assurés que sur place. L'idée est de réparer <br/>
                    ensemble, en équipe, avec les moyens du bord. Les visiteurs sont
                    donc invités à amener leur objet lors d'une session. 

                  </blockquote>
                  <h4>Puis-je amener plusieurs objets à faire réparer en même temps ?</h4>
                  <blockquote>
                    Vu le succès du Repair Café, et pour ne pas pénaliser les autres
                    visiteurs, nous n'inscrivons qu'un seul objet par personne à votre <br/>
                    arrivée. Mais cela ne vous empêche pas, après votre passage à la 
                    table de réparation, de faire une nouvelle fois la file à <br/>
                    l'inscription pour inscrire un autre objet.
                  </blockquote>
              </div>
          </div>
      </div>
      <?php include('footer.php');?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>