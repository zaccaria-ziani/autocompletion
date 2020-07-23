<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
  <span class="navbar-toggler-icon"></span>  
</button>
<div class="collapse navbar-collapse" id="collapse_target">
<a href="http://localhost/autocompletion/index.php" class="navbar-brand"><img src="image/logosite.png" class="imgthauvin"></a>

<span class="navbar-text"></span>
    <ul class="navbar-nav">
   
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  data-toggle="dropdown" data-target="dropdown_target" href="#">Joueurs par pays
        <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown_target">
            <ul class="navbar-nav">
            <a href="http://localhost/autocompletion/search?q=france" class="dropdown-item">Joueurs Français  </a>
            <div class="dropdown-divider"></div>
            <a href="http://localhost/autocompletion/search?q=bresil"class="dropdown-item">Joueurs Brésiliens </a>
            
            </ul>
           
        </div>
       
        </li>
        <form method="get" action="search">
  <input type="text" name="q" id="recherche" placeholder="Rechercher" autocomplete="off" />
  <a class="btn btn-primary btn-lg" href="#" role="button">Rechercher</a>
  <div id="data"></div>
</form>
    </ul>
   
</nav>
