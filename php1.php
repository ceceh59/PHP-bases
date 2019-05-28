<?php
	// ceci est un commentaire
	/*
	* les bases de PHP
	*/

	// 1 - les variables
	$chaine = "chaine de caractères";
	$entier = 15;
	$decimal = 10.5;
	$boolean = false;
	$null = NULL;
	$entier = "test";
	// php typage faible des variables :
	// on ne précise pas le type des variables
	
	// dumper/analyser une variable en phase de développement

	var_dump($chaine);
	var_dump($entier);
	var_dump($decimal);
	var_dump($boolean);

		// la concatenation en php : le point
	$deuxiemePartie = " la deuxieme partie du texte";
	$concatenation ="Premiere partie de texte".$deuxiemePartie;

	echo "<br>".$concatenation;

	// les opérations
	$addition = 3 + 54.546;
	$soustraction = 50 - 5;
	$multiplication = 3 * 3;
	$division = 26 / 4;
	$operation = (1 + 5) * 6;
	$operation2 = $addition * 5 - $division;

	echo "<br>".$operation2;

	$modulo = 10 % 3;
	echo "<br>".$modulo;

	/* les structures conditionnelles */
	if ("chaine1" == "chaine2") {
		echo "Chaine1 est égale à Chaine 2";

	}

	if (10 == 5 ){
		echo "10 est égal à 5";
	}
	else {
		echo "10 n'est pas égal à 5";
	}


	/**
	* opérateur de comparaison
	* == égal
	*< inferieur
	*> superieur
	*<=inferieur ou egal
	* != différent de
*/

	if (10>20) {
		// non
	}	
	else {
	// non
	}
	  // les conditions multiples

	  if(5 == 5 && 10> 3) {
	
		// oui 5 = 5 et 10 supérieur à 3

	  }

	  if (5 == 4 || 20>10) {
	  	// 5 pas egal 4 mais 20 superieur à 10
	  	// donc oui on rentre ici
	  }



	  // switch: selon une valeur
	  $note = 13;
	  switch ($note) {
	  	case 0:
	  	echo "raté";
	  	break;
	  	case 1:
	  	case 2:
	  	case 3:
	  	case 4:
	  	echo "bof";
	  	break;
	  	case 13;
	  	echo "<br>"."bien";
	  	break;
	  	default;
	  	echo "pas de commentaire";
	  }

	  /** Les boucles **/
	  // for : on utilise la boucle qd on connait le nombre d'iterations
	  for ($i=0;$i < 10; $i++) {
	  	echo "Message affiché 10fois<br>";
	  }
	// while : quand on ne sait pas à l'avance le nombre d'iteration
	// ici while n'est pas la boucle adapté puisqu'on connait le nombre
	//d'iteration
	$i = 0;

	while ($i < 10) {
	  	echo "Message affiché 10 fois avec while<br>";

// ne pas oublier l'incrementation, sinon boucle infinie
	  	$i++;
	}

	$resultat = 1;
	$nbTour =0;
	while ($resultat < 100) {
		$resultat = $resultat * rand(1, 15);
		echo $resultat."<br>";
		$nbTour++;
	}
	echo "Sortie boucle while. nombre de tour faits : ".$nbTour;

	// déclarer un tableau vide
	$tableau = [];
	// notation ancienne
	$tableau = array();

	$tableauNumérique = [];
	// push : ajouter un élément en derniere position :
	$tableauNumérique[] = "nouvelle valeur";
	$tableauNumérique[] = " valeur 2";
	// indiquer l'indice à laquelle on veut mettre une valeur
	// mettre l'indice entre les crochets
	$tableauNumérique[2] = " valeur 3";
	$tableauNumérique[10] = "valeur 4";

	// pas logique car l'indice suivant devrait être 3
	// $tableauNumerique[10] = "valeur 4";

	$tableauNumérique[] = 50;
	$tableauNumérique[] = true;
	$tableauNumérique[] = [];

	var_dump($tableauNumérique);

	// déclarer un tableau numérique avec des valeurs par défaut
	$tableauNumérique2 = ["chaine 1", 50, "autre chaine"];

	/** Tableau associatif  **/
	$tableauAssociatif = [];
	$tableauAssociatif["nom"] = "toto";
	$tableauAssociatif["age"] = 36;

	echo "<br>";
	var_dump($tableauAssociatif);

// afficher une clé en particulier
echo $tableauAssociatif["nom"].'<br>';

// impossible car un tableau associatif n'utilise d'indice numérique
/*
for ($i=0;$i<2;$i++) {
    echo $tableauAssociatif["age"];
}
*/

// pour boucler sur un tableau, on peut utiliser la boucle foreach
// il n'y pas de condition de fin, la boucle se termine toute seule, quand
// on a fait le boucle de tous les éléments dans le tableau
foreach ($tableauAssociatif as $toto) {
	echo $toto.'<br>';
}

// si on veut connaitre la clé sur laquelle on est entrain de boucler
foreach ($tableauAssociatif as $key => $value) {
	echo $key.":".$value.'<br>';
}

// fonctions à utiliser sur les tableaux
// count pour récupérer le nombre d'éléments dans un tableau
$nbElems = count($tableauNumérique);

// in_array : savoir si une valeur se trouve dans un tableau
// renvoie true si c'est le cas, false sinon
$tableauTest = ['test', 'toto', 'salut'];
if (in_array("test", $tableauTest)) {
	echo "test a été trouvé dans la variable tableauTest<br>";
}
if (in_array("bonjour", $tableauTest)) {
	// on ne rentrera jamais dans ce if
	echo "bonjour  a été trouvé dans la variable tableauTest<br>";
}

// array_search : chercher dans un tableau la clé correspond à une valeur
// renvoie la clé correspondant à la  valeur passée
// si la valeur n'existe pas dans le tableau, false est retouné
$cleRecherchee = array_search('toto', $tableauTest);
var_dump($cleRecherchee);

$tableauTest = ["cle1" => 'test', "codePostal" => 59000];
$cleRecherchee = array_search(59000, $tableauTest);
var_dump($cleRecherchee);

$cleRecherchee = array_search("valeur inexistante dans le tableau", $tableauTest);
var_dump($cleRecherchee);

// array_key_exist : savoir si une clé existe dans un tableau
$cleExist = array_key_exists("ville", $tableauTest);
if ($cleExist) {
	echo "<br>La clé ville existe dans le tableau tableaTest";
}
else {
	echo "<br>La clé ville n'existe pas dans le tableau tableauTest";
}

$cleExist = array_key_exists("codePostal", $tableauTest);
if ($cleExist) {
	echo "<br>La clé codePostal existe dans le tableau tableaTest";
}
else {
	echo "<br>La clé codePostal n'existe pas dans le tableau tableauTest";
}

// des tas de fonctions sur les tableaux existent déjà, faites une recherche avant de réinventer la roue
?>

