<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>




<script src="jquery.js">
function afficherMois(id) {
    if (id == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","vues/v_menuDeroulant.php?q="+id,true);
        xmlhttp.send();
    }
}
</script>





<form>
   
<p>
<!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
     <select name="users" onchange="afficherMois(this.value)">
          
         <?php
        
         for ($i = 0 ; $i<$nombreFicheFrais ; $i++)
         {
             ?>  <option value=" <?php $infoId[$i]['id']?> ">  
            <?php echo $infoId[$i]['prenom']." ".$infoId[$i]['nom']; ?>
             </option>
         <?php    
         
         }
         ?>
             
     </select>
</form>
</p>

