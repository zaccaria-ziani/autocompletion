<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
</head>
<body>
<!-- <div class="jumbotron" style="margin-bottom: 0px;">
<h2>Cherchez vos joueurs préférés</h2>

</div> -->
 

    <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top ">

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
    <!--LIER LE JS/-->
   
 <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    

  <!--  <script>
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
    minLength : 1
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
/-->
    <body>

    <div class="container-fluid ">
        <div class="container">
            <div class="row">
                
<?php
    

  if(isset($_GET['q']))
  {
    $q =$_GET['q'];
    $bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
    $query = $bdd->prepare("SELECT noms,pays,images,bio,club FROM football WHERE noms = '$q' or pays = '$q'");
    $query->execute();
    $results = $query->fetchAll();
    $bdd = null;

    
  
    for ($x = 0 ; $x < count($results); $x++){
        ?>
      
      
       <h1><?php echo $results[$x][0];?></h1>
       <article class="col-xs-12 col-md-12 col-lg-12">
                     

                    <h1><?php echo $results[$x][1];?></h1><br>

                    <img src="image/<?php  echo $results[$x][2]; ?>" class="imgfoot" style="width:250px"> 
                    
                    <img src="image/<?php echo $results[$x][3];?>" class="stats" style="width:400px">

                    <img src="image/<?php echo $results[$x][4];?>" class="club">

                    
                    
                </article> 
       
      
       
       <?php

        // foreach($results[$x] as $row)
        // {
        //     echo $results[$x]->noms;
        //     echo $row;
        // }
    }
  }else
  {
      echo 'Sorry cant find any player';
  }


// class Pokemon {
	
// 		public function connexionbdd(){

// 			try{
// 				$bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
// 				return($bdd);
// 			}
// 			catch(PDOException $e){
// 				print "Erreur : ".$e->getMessage();
// 				die(); 
// 			}

// 		}

        

		

//     	}
	
// 	}








?>
 </div>
</body>