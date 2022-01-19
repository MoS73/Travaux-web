<?php
echo "Je vais trouver ton chiffre entre 0 et 100, ne triche pas stp !";
$min = 0;
$max = 100;
$nbEssai = 7;
$gagne = false;

for ($i=$nbEssai; $i > 0 ; $i--) { 
    $nbAleatoire = rand($min, $max);

    do{
        $msg = "Je pense au nombre $nbAleatoire ! Qu'en est-il vraiment ?\nSeul +, - et = sont autorisés.";
        $indic = readline($msg);
    } while($indic != "+" && $indic != "-" && $indic != "=");

    switch ($indic) {
        case "+":
            $min = $nbAleatoire+1;
            break;
        case "-":
            $max = $nbAleatoire-1;
            break;
        default:
            $gagne = true;
            $i = 0;
            break;
    }

    // version avec des if et elseif équivalente au switch ci-dessus
    // if($indic == "+"){
    //     $min = $nbAleatoire+1; 
    // } else if($indic == "-"){
    //     $max = $nbAleatoire-1;
    // } else {
    //     $gagne = true;
    //     $i = 0;
    // }
}

if($gagne) {
    echo "j'ai gagné et je me la pete !";
} else {
    echo "j'ai perdu tu es le meilleur des tricheurs !";
}
