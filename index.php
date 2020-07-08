<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Autocompletion</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
</head>
<body>
   <h1>Bonjour</h1> 

  <form>
      <input type = "text" id="recherche"/>
  </form>


   <!--LIER LE JS/-->
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script>
      var liste = [
    "Thauvin",
    "Payet",
    "Giroud",
    "Varane",
    "Umtiti",
    "Gueye",
    "Pavard",
    "Mbappé",
    "Coman",
    "Fekir",
    "Clément Lenglet",
    "Benjamin Mendy"
    ];
$('#recherche').autocomplete({
    source : liste,
    minLength : 1
});

  </script>
  
</body>
</html>