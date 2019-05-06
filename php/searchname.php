<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_array.css">
    <title> Nom</title>
</head>
<body>

<div class="recherche_p">

<form action="" name="searchthis" method="post">
<input id="quantite" name="nom" type="text" placeholder="Rechercher le nom d'un produit" />
<input id="search-btn" name="search" type="submit" value="Rechercher" />
</form>

</div>

<?php
       $tab=array(
        array("nom", "prix","quantite"),
        array("huile", "10000","11"),
        array("beurre", "500","11"),
        array("café", "1500","41"),
        array("thé", "8000","61"),
        array("cigar", "9000","61"),
        array("salade", "17000","5"),
        array("fraise", "1000","1"),
        array("riz", "30000","7"),
        array("savon", "5400","41"),
    );
    extract($_POST);
  //  array_push($_POST['produit'],$_POST['prix'],$_POST['quantite']);
    echo '<table class="tableau_produit">';
    for($i=0;$i<count($tab);$i++){
        $nom=$tab[$i][0];
        $prix=$tab[$i][1];
        $qte=$tab[$i][2];
         echo '<tr>';
         echo '<td>'.$nom.'</td>';
         echo '<td>'.$prix.'</td>';
         echo '<td>'.$qte.'</td>';    
         echo '<td>'.$montant=($prix*$qte).'</td>';
         echo '</tr>';
    }
   


     

    
if (isset($_POST['search'])){
$searchthis=$_POST['nom'];
echo '<table class="tableau_produit">';
    for($i=0;$i<count($tab);$i++){
       if($searchthis<=$tab[$i][0]){
        $nom=$tab[$i][0];
        $prix=$tab[$i][1];
        $qte=$tab[$i][2];
         echo '<tr>';
         echo '<td>'.$nom.'</td>';
         echo '<td>'.$prix.'</td>';
         echo '<td>'.$qte.'</td>';    
         echo '<td>'.$montant=($prix*$qte).'</td>';
         echo '</tr>';
       }

}
}
   
    
    ?>
    </body>
</html>