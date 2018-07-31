<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style2.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">

        <h4 class="title">Nous contacter</h4>
        <div class="contact" <p>Si vous avez une question, peut-être trouverez-vous la réponse sur la page de question-réponses, ou dans notre rubrique
          de conseils pour préparer votre visite.
          <br>
          <br> Dans le cas contraire, vous pouvez nous contacter Repair Café Schaerbeek - ouvert tous les deuxièmes dimanches
          du mois, de 14 à 17h 307, rue des coteaux à 1030 Schaerbeek</p>

          <h4 class="title">Plus d'informations et autres Repair Cafés.</h4>
          <p>Pour être tenus informés des prochaines sessions de notre Repair Café Schaerbeek, inscrivez-vous sur notre mailing
            liste.
            <br>
            <br> Toutes les informations utiles sur le concept du Repair Café, ainsi que la liste, lieux et contacts de tous
            les Repair Cafés en Belgique sur le site de Repair Café Belgique.
            <br>
            <br> Pour rester informé des activités des Repair Cafés, visitez la page Facebook de Repair Café Brussels </p>
        </div>
      </div>

      <div class="col-12 col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.329351704534!2d4.376923315746336!3d50.86210217953434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c36eae8b7e3d%3A0x6d729da91489d605!2sRue+des+Coteaux+307%2C+1030+Schaerbeek!5e0!3m2!1sen!2sbe!4v1532946032757"
          width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-2 col-md-2">
    </div>
    <div class="col-6 col-md-6">

      <!-- formulaire -->
      <div class="formulaire">
        <h4 class="title">Formulaire</h4>
        <form action="">
          <input type="radio" name="gender" value="male" checked> Male
          <input type="radio" name="gender" value="female"> Female
          <input type="radio" name="gender" value="other"> Other
          <br>
          <!-- firstname -->
          <label for="mail">Firstname :</label>
          <br>
          <input type="text" name="firstname" value="">
          <br>
          <!-- lastname -->
          <label for="mail">Lastname :</label>
          <br>
          <input type="text" name="lastname" value="">
          <br>
          <!-- email -->
          <label for="mail">e-mail :</label>
          <br>
          <input type="email" id="mail" name="user_mail">
          <br>
          <!-- message -->
          <label for="msg">Message :</label>
          <br>
          <textarea id="msg" name="user_message"></textarea>
          <br>
          <!-- motifs -->
          <label for="Motifs">Motifs:</label>
          <br>
          <!-- carform -->
          <select name="objet" form="carform">
            <option value="Demande d'info">Demande d'info</option>
            <option value="Inscription">Inscription</option>
            <option value="Nouvelles idée">Nouvelles idée</option>
          </select>
          <br>
          <br>

          <label for="doc">Documents :</label>
          <br>
          <input type="file" name="icone" id="icone" />
          <br />
          <label for="icone">(JPG, PNG ou GIF)</label>
          <br />

          <label for="msg">Message :</label>
          <br>
          <input type="radio" name="gender" value="Html" checked> Html
          <input type="radio" name="gender" value="text"> text
          <br>
          <button type="submit" form="nameform" value="Submit">Contactez Moi</button>
          <br>
          <br>
        </form>
      </div>
    </div>
  </div>
  <div class="col-4 col-md-4">
  </div>
  </div>
  </div>
  </div>
</body>

</html>