<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResultadoPeer
 *
 * @author jonathan
 */
class ResultadoPeer {
    //put your code    

/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */


     public static function doSelect()
	{
        $palabras="video";


         $c= new Criteria();
         
     //Obtener Articulos
        $cton = $c->getNewCriterion(ArticuloPeer::NOMBRE,'%'.$palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(ArticuloPeer::DESCRIPCION, '%'.$palabras.'%',CRITERIA::LIKE));
         //$cton->addOr( $c->getNewCriterion(ArchivoPeer::TAGS, '%'.$palabras.'%',CRITERIA::LIKE));
       $c->add($cton);
          
          
       $result_art= ArticuloPeer::doSelect($c);

         $c= new Criteria();
       //Obtener Archivos
       
        $cton = $c->getNewCriterion(ArchivoPeer::NOMBRE,'%'.$palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(ArchivoPeer::DESCRIPCION, '%'.$palabras.'%',CRITERIA::LIKE));
         //$cton->addOr( $c->getNewCriterion(TipoPeer::NOMBRE, '%'.$palabras.'%',CRITERIA::LIKE));
       $c->add($cton);

        
       $result_arch= ArchivoPeer::doSelect($c);

        $c= new Criteria();
       //Obtener Galerias
       /*
        $cton = $c->getNewCriterion(GaleriaPeer::NOMBRE,'%'.$palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(GaleriaPeer::DESCRIPCION, '%'.$palabras.'%',CRITERIA::LIKE));
       $c->add($cton);
        *
        */
      $result_gale= GaleriaPeer::doSelect($c);

       $c= new Criteria();
       //Obtener Fotos
       /*
        $cton = $c->getNewCriterion(FotoPeer::NOMBRE,'%'.$palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(FotoPeer::DESCRIPCION, '%'.$palabras.'%',CRITERIA::LIKE));
       $c->add($cton);
        *
        */
      $result_fotos= FotoPeer::doSelect($c);

         $c= new Criteria();
       //Obtener Sitios
       /*
        $cton = $c->getNewCriterion(SitioPeer::NOMBRE,'%'.$palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(SitioPeer::DESCRIPCION, '%'.$palabras.'%',CRITERIA::LIKE));
         $cton->addOr( $c->getNewCriterion(SitioPeer::DIRECCION, '%'.$palabras.'%',CRITERIA::LIKE));
        $c->add($cton);
        * 
        */
       $result_sitio= SitioPeer::doSelect($c);

       $result = array();
       //Convertir todos los resultados a resultado
       Foreach($result_art as $art)
       {
           $resul= new Resultado($art,'Archivo');
           $result[] = $resul;
           
       }
       Foreach($result_arch as $arch)
       {
           $resul= new Resultado($arch,'Archivo');
           $result[] = $resul;

       }

		return $result;
	}

}
?>
