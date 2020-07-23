<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
</head>
<?php
    require_once('header.php');

    
?>
<body>
<!-- <div class="jumbotron" style="margin-bottom: 0px;">
<h2>Cherchez vos joueurs préférés</h2>

</div> -->
 

   
   
 
    <body>

   
                
<?php
    

  if(isset($_GET['q']))
  {
    $q =$_GET['q'];
    $bdd = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', '');
    $query = $bdd->prepare("SELECT noms,pays,images,bio,logoclub FROM football WHERE noms = '$q' or pays = '$q'");
    $query->execute();
    $results = $query->fetchAll();
    $bdd = null;

    
  
    for ($x = 0 ; $x < count($results); $x++){
        ?>
      
      
       <h1><?php echo $results[$x][0];?></h1>
       <article class="col-xs-12 col-md-12 col-lg-12">
                     

                    <h1><?php echo $results[$x][1];?></h1><br>
                    <div class="cphotos">
                    <div class="photo">
                    <img src="image/<?php  echo $results[$x][2]; ?>" class="imgfoot" style="width:350px">
                    <img src="image/cercle.png" class="cercle" style="width:350px"> 
                    </div>
                    
                    <img src="image/<?php echo $results[$x][3];?>" class="stats" style="width:400px">

                    <img src="image/<?php echo $results[$x][4];?>" class="logoclub">

                    </div>
                    
                </article> 
       
      
       
       <?php

        
    }
  }else
  {
      echo "Sorry can't find any player";
  }

?>
 </div>
  
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="script.js"></script>
</body>