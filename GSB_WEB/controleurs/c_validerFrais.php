<?php
require_once 'includes/fct.inc.php';
require_once 'includes/class.pdogsb.inc.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idFrais = $pdo->getLesIdFicheFrais();
  $espace=[' '];
  $nombreFicheFrais=count($idFrais);

for ($i = 0 ; $i<$nombreFicheFrais ; $i++)
{
   /* for ( $j= 0 ; $j=$i ; $j++ )
    {
        
        $idExistant = $pdo->getInfosId($idFrais[$i]['id']) ;
        $idCompare = $pdo->getInfosId($idFrais[$j]['id']) ;
                
               
        $comparaisonId=strcmp($idExistant,$idCompare) ;
                
        if ( $comparaisonId == 0)
        {       
            $i++;
        }
        else
        {
    *
    */
            $infoId[$i] = $pdo->getInfosId($idFrais[$i]['idvisiteur']);
                        
    
}
              
include 'vues/v_validerFrais.php';

?>
