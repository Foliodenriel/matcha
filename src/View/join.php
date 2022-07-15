<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $this->asset('css/style.css') ?>">
        <link rel="stylesheet" href="<?php echo $this->asset('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo $this->asset('css/pages/index.css') ?>">
    </head>
    <body>

    <?php include_once('templates/header.php'); ?>

        <div id="mmvc-panel-content">

    <h2>De belles rencontres vous attendent...</h2>
    <form action="<?php echo $this->router->findPathFromRoute("join"); ?>" method="post">
    <p style="color:green"> Un email pour valider vote compte a été envoyé.</p>
    <label for="firstname">Prénom:</label><br/>
  <input type="text" id="firstname" name="firstname" required><br/>
  <label for="name">Nom:</label><br/>
  <input type="text" id="name" name="name" ><br/>
  <label for="pseudo">Pseudo:</label><br/>
  <p style="color:red"> Pseudo déja utilisé</p>
  <p style="color:green"> Pseudo disponible !</p>
  <p >⌛ vérification en cours...</p>
  <input type="text" id="pseudo" name="pseudo" required><br/>
    <label for="email">email:</label><br/>
    <p style="color:red"> Un compte existe déja avec cet email</p>
  <input type="text" id="email" name="email" ><br/>
  <label for="password">Mot de passe :</label><br/>
  <p style="color:red"> Votre mot de passe doit compter au moins 8 caractères.</p>
  <input type="password" id="password" name="password" ><br><br>
  <input type="submit" value="Rejoindre">
    </form>
    <p><a href="<?php echo $this->router->findPathFromRoute("login"); ?>">déja inscrit ? </a> </p>
            <!-- <div id="panel-header" class="row d-flex justify-content-center">
                <div class="col-md-12 text-center">
                    <h3>Welcome on MiniMVC!</h3>
                    Print test:
                </div>
            </div>
            <div id="panel-body" class="row d-flex justify-content-around">
                <div class="col-md-3 text-center">
                    <p>This MVC handle a short model/view/controller system that can be easily use as beginer.</p>
                    <p>This is a first short version, might be optimized or updated later depending on the needs.</p>
                </div>
                <div class="col-md-3 text-center">
                    B
                </div>
                <div class="col-md-3 text-center">
                    C
                </div>
            </div> -->
        </div>
    </body>
</html>