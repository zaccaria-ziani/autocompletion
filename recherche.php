<?php
    require_once('search.php');
    $r = new Pokemon;
    $results = $r->search($_GET['q']);
    $r = null;
?>


<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Recherche - <?php echo $_GET['q']; ?></title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Kreon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />

  </head>

  

<body>

  <main id="mainsearch">

  <?php 
  
  if(!empty($results)){
  foreach($results as $result){ 
    ?>

    <div class="result">

        <div class="infos">
        
            <h3><a href="produit.php?p=<?php echo $result->id; ?>"><?php echo $result->noms; ?></a></h3>
                        
        </div>
    
    </div>


<?php } 
}

    else{ ?>

    <p>Aucun résultat pour <?php echo $_GET['q']; ?></p>
  <?php } ?>

  </main>


</body>

  