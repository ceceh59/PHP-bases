<?php
/* exercice php 1*/
    // calculer l'age à partir d'une année donnée
$annee = rand(1906, 2019);
// calculer l'age
// afficher à l'écran "vous êtes majeur" ou "vous êtes mineur"
// si mineur : calculer un nombre de points
// si il reste un nombre pair d'années avant d'être majeur
// 100 points, sinon 50 points
// afficher les points



//1/

/*$age = 2019 - $annee;

//2/

if ($age>= 18) {
    echo"vous êtes majeur";
}
else  {
    echo "Vous êtes mineur";
    $modulo = (18 - $age) % 2;
  }
if($modulo==0) {
    echo"gagné 100 points";

}
elseif ($modulo==1) {
    echo "<br>"."gagné 50 points";*/
}
/* correction
$annee = rand(1906, 2019);
$age = 2019 - $annee;

  $annee = rand(1906, 2019);
    $age = 2019 - $annee;

    if ($age < 18) {
        echo "Vous êtes mineur : ".$age."<br>";
        // calculer le nombre d'années restantes avant majorité
        $anneesRestantes = 18 - $age;
        // regarder si ce nombre est pair ou impair
        // le modulo peut nous permettre de savoir ça
        $modulo = $anneesRestantes % 2;
        if ($modulo == 0) {
            echo "Vous avez 100 points";
        }
        else {
            echo "Vous avez 50 points";
        }
    }
    else {
        echo "Vous êtes majeur : ".$age;
    }

    // solution alternative
    if ($age < 18  && (18-$age) % 2 == 0) {
        echo "Vous êtes mineur et vous avez 100 points";
    }
    elseif ($age < 18) {
        echo "Vous êtes mineur et vous avez 50 points";
    }
    else {
        echo "Vous êtes majeur";
    }

    **/

/* exercice 2 :
a partir d'une chaine de caractéres
coder le script qui va créer une chaine de caracteres
ou tous les caracteres de la premiere chaine seront inverses
par exemple si la chaine 1 est "salut", le script
doit créer la chaine "tulas"
indice : les chaines de caracteres peuvent etre traitees comme des tableaux
*/

$tableauAssociatif =["chaine 1"];


$reversed = array_reverse ($tableauAssociatif);





$chaine "salut";
$chaine2 ="";
for ($i=0;$i<strlen($chaine); $i++) {
    $chaine2 = $chaine[$i].$chaine2;
}
echo $chaine2;

for ($i=strlen($chaine); $i>=)


      $chaine = "toto";
    $chaine2 = "";
    for ($i=0; $i<strlen($chaine); $i++) {
        $chaine2 = $chaine[$i].$chaine2;
    }
    echo $chaine2;

    $chaine3 = "";
    for ($i=strlen($chaine)-1; $i>=0; $i--) {
        $chaine3 = $chaine3.$chaine[$i];
    }
    echo $chaine3;

    $chaine4 = strrev($chaine);
    echo $chaine4;

?>
