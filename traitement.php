<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Confirmation</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      echo "<h2>Merci $prenom $nom, nous avons bien reçu votre message suivant :</h2>";
      echo "<p><strong>Email :</strong> $email</p>";
      echo "<p><strong>Message :</strong> $message</p>";
  } else {
      echo "<h2>Erreur : Formulaire non soumis</h2>";
  }
  ?>
</div>

</body>
</html>