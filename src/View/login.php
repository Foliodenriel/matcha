<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo $this->asset('css/style.css') ?>">
        <link rel="stylesheet" href="<?php echo $this->asset('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo $this->asset('css/pages/index.css') ?>">
    </head>
    <body>
        <div id="mmvc-panel-content">

    <h2>Connectez-vous</h2>
    <form action="#" method="post">
    <label for="email">email:</label><br/>
  <input type="text" id="email" name="email" ><br/>
  <label for="password">Mot de passe :</label><br/>
  <input type="password" id="password" name="password" ><br><br>
  <p style="color:red"> Email ou mot de passe invalide.</p>
  <input type="submit" value="Se connecter">
    </form>
    <p><a href="<?php echo $this->router->findPathFromRoute("forgot"); ?>">Mot de passe oublié ?</a> </p>
    <p><a href="<?php echo $this->router->findPathFromRoute("join"); ?>">Pas encore inscrit ? Créez un compte en deux minutes.</a> </p>
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