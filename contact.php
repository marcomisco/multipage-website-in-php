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
      require('form.php');
      // require_once('/upload.php');
      // require('');
      function remplir($i,$j,$button_submit){
        if(!empty($i) AND !empty($j)){
          return "<p style='color:black'>$i "." $j <p>";
        } else {
          return "<p style='color:red'>Veuillez remplir les champs précédents<p>";
        }
      }
      function gender(){
          global $gender;
          if($gender !== false) {
              return "<p style='color:black'>$gender<p>";
          } else {
              return "<p style='color:red'>Veuillez indiquer votre genre<p>";
          }
      }
      function val_email(){
          global $val_email;
          if($val_email !== false) {
              return "<p style='color:black'>$val_email<p>";
          } else {
              return "<p style='color:red'>Veuillez indiquer une adresse email valide<p>";
          }
      } 
    ?>

    <?php
      
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["button-file"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["button-file"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["button-file"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["button-file"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }
    ?>
      <?php include('header.php'); ?>
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <?php include('sidebar.php'); ?>
            </div>>
            <div class="col-md-5">
            <!-- POST METHOD -->
            <form method="post" enctype='multipart/form-data' action="contact.php">
              <div class="row">
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="lastname" placeholder="*Last name"/>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name='firstname' placeholder="*First name" />
                </div>
              </div>
              <?php if (isset($button_submit)) echo remplir($firstname,$lastname,$button_submit);?>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Monsieur">
                <label class="custom-control-label" for="customRadioInline1">Homme</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Madame">
                <label class="custom-control-label" for="customRadioInline2">Femme</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" name="gender" class="custom-control-input" value="Sans mention" checked>
                <label class="custom-control-label" for="customRadioInline3">Autres</label>
              </div>
              <?php echo gender() ?>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="*Enter email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              <?php echo val_email(); ?>
              <select class="custom-select" name="object-list">
                <option selected>Objet</option>
                <option value="information">Informations</option>
                <option value="inscription">Inscription</option>
                <option value="administratif">Administratif</option>
                <option value="other">Autre</option>
              </select>
              <br><br>
              <div class="custom-file">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                <input type="file" class="custom-file-input" id="customFile" name="button-file">
                <label class="custom-file-label" for="customFile">Choose file</label>
                <?php if (isset($button_submit)) echo uploadImage(); ?>
              </div>
              <br> <br>
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Message"></textarea>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" name="txt" value="html-txt" class="custom-control-input"checked>
                <label class="custom-control-label" for="customRadioInline4">HTML</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline5" name="txt" value="texte-txt" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline5">Texte</label>
              </div>
              <br> <br>
              <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>
        </div>

            <?php include('footer.php'); ?>
 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>