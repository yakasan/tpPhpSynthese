<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand" > <?= $_SESSION['namePage'] ?></span>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="indexx.php?page=1">Accueil<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=2">Liste des Citations<span class="sr-only">(current)</span></a></li>
        <li><a href="indexx.php?page=3">Ajout de Citations<span class="sr-only">(current)</span></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Compte <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><?= $_SESSION['login'] ?></li>
                <li><a href="?page=1&modif">Modifier Mot de Passe</a></li>
                <li><a href="?page=1&deco">Déconnexion</a></li>
            </ul>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
