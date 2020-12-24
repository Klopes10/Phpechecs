<?php

$tableau = "";
$nblignes = 8;
$nbcolonnes = 8;

$pieces = ["&#9814", "&#9816", "&#9815", "&#9813", "&#9812", "&#9815", "&#9816", "&#9814", "&#9817", "&#9817", "&#9817", "&#9817", "&#9817", "&#9817", "&#9817", "&#9817"];

$piecesJ1= $pieces;
$piecesJ2= $pieces;

$piecesJ2 = array_reverse($pieces);


for ($i = 0 ; $i< $nblignes; $i++){
//La boucle des lignes
    $ligne = "<tr>";
    for($j = 0; $j< $nbcolonnes; $j++) {
        //boucle des celulles de la ligne
        $cell="";
        
        if ($i%2 == 1) {
            if ($j%2 == 0) {
                $cell.="<td class='noire'>";     //crée la classe sur la variable cell
            } else {
                $cell.="<td class='blanc'>";
            }
        } else {
            if ($j%2 == 0) {
                $cell.="<td class='blanc'>";
            } else {
                $cell.="<td class='noire'>";
            } 
        } 

        /*if($i <2) {
            $cell.=array_shift($piecesJ1) ;
            $cell.=' noire';
                    
        }
        else if($i>=6){
            $cell.=array_shift($piecesJ2);
            $cell.=' blanc';
                    
        } */
        if ($i < 2) {
            if ($i == 0) {
                $cell .= "<span class = 'joueur1'>$pieces[$j]  </span>";
            } else {
                $cell .= "<span class = 'joueur1'>".$pieces[$j + 8]."  </span>";
            }
        }
        if ($i > 5) {
            if ($i == 7) {
                $cell .= "<span class = 'joueur2'>$pieces[$j]</span>";
            } else {
                $cell .= "<span class = 'joueur2'>".$pieces[$j + 8]." </span>";
            }
        }
        $cell.= "</td>";
        $ligne.= $cell;
    }

    
    $ligne.="</tr>";
    $tableau.=$ligne;
}
?>

<!DOCTYPE html>
<html>
  <body>
  <link rel="stylesheet" href="stylephp.css" />
  
    <table id="tableau">
		<?= $tableau ?>
	</table>
  </body>
</html>
