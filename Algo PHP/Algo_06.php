<?php
$div = 1;
$tab=[];

 $reponse = readline("Entrez un nombre: ");

if ($reponse<2){
     echo "RENTRE UN NUMERO SUPERIEUR A 1";
 }else{
    while($div <= $reponse){
        // si reponse de modulo div = 0
        if($reponse %  $div == 0 ){
        array_push($tab,$div);
    }
    $div++;
}
if (count($tab)==2){
    echo "Le nombre est premier!";
}else{
    echo "Le nombre n'est pas premier";
    for ($div=0; $div<count($tab); $div++){
        echo PHP_EOL . $tab [$div] . PHP_EOL;
    }
}
 }