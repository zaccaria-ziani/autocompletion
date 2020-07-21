

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
    <title>Autocompletion</title>
</head>
<body>
<!-- <div class="jumbotron" style="margin-bottom: 0px;">
<h2>Cherchez vos joueurs préférés</h2>

</div> -->
 

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
                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" 
                data-target="dropdown_target" href="#">Joueurs par pays
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
      <input type="text" name="q" id="recherche" placeholder="Rechercher" />
      <a class="btn btn-primary btn-lg" href="#" role="button">Rechercher</a>
  </form>
        </ul>
       
    </nav>

    <img src="image/background.jpg" class="img-fluid">
  



   <!--LIER LE JS/-->
   
 <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
    <script>
      var liste = [
        "Thauvin",
    "Payet",
    "Griezmann",
    "Varane",
    "Umtiti",
    "Gueye",
    "Pavard",
    "Mbappé",
    "Coman",
    "Kanté",
    "Clément Lenglet",
    "Ferland Mendy",
    "Zinedine Zidane",
    "Sanson",
    "Mandanda",
    "Gignac",
    "Cantona",
    "Patrice Evra",
    "Kamara",
    "Franck Ribery",
    "Neymar",
    "Rivaldo",
    "Gueye",
    "Cafu",
    "Kaka",
    "Robinho",
    "Hulk",
    "Dani Alves",
    "Firmino",
    "Brandao",
    "Socrates",
    "Lucas",
    "Willian",
    "Oscar",
    "Pelé",
    "Juninho",
    "Thiago Silva",
    "Jesus",
    "David Luiz",
    "Casemiro",
    "Vinicius",
    "Richarlison",
    "Adriano",
    "Mountinho",
    "Roberto Carlos",
    "Ronaldinho"
    
    ];
$('#recherche').autocomplete({
    source : liste,
    minLength : 2
});

  </script>
  <script>
  $(document).ready(function(){
      $('#recherche').keyup(function(){
var query = $ (this).val();
if(query !='')
{
    $.ajax({
        url:"search.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
            $('#recherche').fadeIn();
            $('#recherche').html(data);
        }
    })
}
      });

  });
  </script>
  <div class="container-fluid ">
        <div class="container">
            <div class="row">
                <article class="col-xs-12 col-md-12 col-lg-12">
                    <h1>Le site de vos joueurs préférés</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti porro mollitia velit
                    voluptatem nostrum enim libero fuga alias autem rem similique laboriosam, molestiae hic error eaque
                    ea odit deleniti.
                    
                </article>
                <article class="col-xs-12 col-md-4 col-lg-4">
                    <h1>France</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti porro mollitia velit
                    voluptatem nostrum enim libero fuga alias autem rem similique laboriosam, molestiae hic error eaque
                    ea odit deleniti.</p>
                    <button class="btn  btn-custom">Mon bouton</button> <br>
                </article>
               
                <article class="col-xs-12 col-md-4 col-lg-4">
                    <h1>Brésil</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti porro mollitia velit
                    voluptatem nostrum enim libero fuga alias autem rem similique laboriosam, molestiae hic error eaque
                    ea odit deleniti.
                    
                </article>
            </div>
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
     </div class>
     <section id="section1">

     
     </section>
</body>
</html>