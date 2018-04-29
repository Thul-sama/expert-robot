<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/


// récupère les mois associé a l'id
$moisFicheFrais = $pdo->getLesMoisFicheFrais($q)   ;

// nombre de mois différents
$nombreMois=count($moisFicheFrais);
?>



<?php //$q = intval($_GET['q']); 

$q='a131';

?>


<form>
   
<p>
<!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
     <select name="mois" >
          
         <?php
        
         for ($i = 0 ; $i<$nombreMois ; $i++)
         {
             ?>  <option value=" <?php $infoId[$i]['mois']?> ">  
            
             </option>
         <?php    
         
         }
         
         echo "TEST";
         ?>
             
     </select>
</form>
</p>
    
  
?> 
