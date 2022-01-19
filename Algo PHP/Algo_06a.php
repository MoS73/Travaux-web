<?php 
do{
     $nb=readline("Entrez un nombre");
 }while(!is_numeric($nb) || $nb<0);
 $min=2;
 $div=[1,$nb];
 for($i=$min; $i<$nb; $i++){
     if($nb%$i==0){
         $div[]=$i;
     }
 }
 if(count($div)>2||$nb==0||$nb==1){
     echo "Le nombre n'est pas premier et voici ses diviseurs:" . implode(',',$div);
 }else{
     echo "Le nombre est premier";
 }
 ?>