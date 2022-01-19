<?php
$phrase=readline("Entre une phrase: ");
if(strlen($phrase)<10){
    echo "Moins de 10";
}else if(strlen($phrase)>50){
    echo "Plus de 50" ;
}else{
    echo "Entre 10 et 50";
}
?>

<?php
switch(strlen($phrase)){
    case(strlen($phrase)<10):
        echo "Moins de 10";
    break;
    case(strlen($phrase)>50):
        echo "Plus de 50";
    break;
    default:
        echo "Entre 10 et 50";
    }
?>