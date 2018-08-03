<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php include('header.php'); ?>
      <div class="container">
        <div class="row">
            <div class="col-md-4">
            <?php include('sidebar.php'); ?>
            </div>>
            <div class="col-md-5">
                <!-- <form action="form.php" method="post" id="formStyle">
                    titre   <input type="radio" name="title" id=""> Mme <input type="radio" name="" id=""> Melle <input type="radio" name="" id=""> Mr <br/>
                    nom     <input type="text" name="lastName"> <br/>
                    prénom  <input type="text" name="firstName" id=""> <br/>
                    email   <input type="text" name="email" id=""><br/>
                    object  <select name="contactSubject"><br/>
                                <option value="questions">Questions</option>
                                <option value="request">Demande de</option>
                                <option value="info">renseignements</option>
                                <option value="other">Autres</option>
                            </select>
                    votre messsage <input type="text" name="yourMsg" id=""> <br/>
                    documents <input type="file" name="fileToUpload" id="fileToUpload"> <br/>
                    format de réponse souhaité: HTML <input type="radio" name="" id=""> Texte <input type="radio" name="" id=""> <br/>
                    envoyé <input type="submit" value="">
                </form> -->
            <div id="formStyle">
              <h4 class="title">Formulaire</h4>
              <form action="contact.php" >
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
                <br/>
                <!-- firstname -->
                <label for="mail">Firstname :</label>
                <br/>
                <input type="text" name="firstname" value="">
                <br/>
                <!-- lastname -->
                <label for="mail">Lastname :</label>
                <br/>
                <input type="text" name="lastname" value="">
                <br/>
                <!-- email -->
                <label for="mail">e-mail :</label>
                <br/>
                <input type="email" id="mail" name="user_mail">
                <br/>
                <!-- message -->
                <label for="msg">Message :</label>
                <br/>
                <textarea id="msg" name="user_message"></textarea>
                <br/>
                <!-- motifs -->
                <label for="Motifs">Motifs:</label>
                <br/>
                <!-- carform -->
                <select name="objet" form="carform">
                  <option value="Demande d'info">Demande d'info</option>
                  <option value="Inscription">Inscription</option>
                  <option value="Nouvelles idée">Nouvelles idée</option>
                </select>
                <br/>
                <br/>

                <label for="doc">Documents :</label>
                <br/>
                <input type="file" action ="upload.php"name="image_field" id="icone"/>
                <br />
                <label for="icone">(JPG, PNG ou GIF)</label>
                <br />

                <label for="msg">Message :</label>
                <br/>
                <input type="radio" name="gender" value="Html" checked> Html
                <input type="radio" name="gender" value="text"> text
                <br/>
                <button type="submit" form="nameform" name="submit" value="Submit">Contactez Moi</button>
                <br/>
                <br/>
              </form>
            </div>
          </div>
        </div>
        <?php
          // Afficher les erreurs à l'écran
          ini_set('display_errors', 1);
          // Enregistrer les erreurs dans un fichier de log
          ini_set('log_errors', 1);
          // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
          ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
          // Afficher les erreurs et les avertissements
          // error_reporting(e_all);
        ?>
        <?php

            $submit = $_POST('submit');
            if (isset($submit)) {
              $lastname = $_POST['lastname'];
              $subject = $_POST['sujet'];
              $firstsname = $_POST['firstname'];
              $user_message = $_POST['user_message'];
              $user_mail = $_POST['user_mail'];

              $mailto = "nadir.medlle@gmail.com";
              $headers = "email from ".$user_mail;
              $txt = "You received an email from ".$lastname.' '.$firstname."\n\n".$user_message;

              mail($mailto,$subject,$text,$headers);
              header("Location: form.php?emailsend");
            }
        ?>
        <?php include('footer.php'); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>