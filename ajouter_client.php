<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">

  <title>Ajouter client</title>
</head>

<body>
  <!-- HEADER -->
  <?php include "header.php" ?>
  <hr>

  <!-- CORP DE PAGE -->
  <div class="container">
    <h2>Ajouter un client</h2>
    <form action="traitement_ajout_client.php" method="POST">
      <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nomclient">
      </div>
      <div class="form-group">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenomclient">
      </div>
      <div class="form-group">
        <label>Date de naissance</label>
        <input type="date" class="form-control" name="datenaissanceclient">
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
  </div>
  <hr>

  <!-- FOOTER -->
  <?php include "footer.php" ?>
</body>

</html>