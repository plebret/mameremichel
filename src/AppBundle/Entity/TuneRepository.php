<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * 
 * 
 */
class TuneRepository extends EntityRepository {
    public function testAutocomplete($toto){
        $this->demo();
    }
    
    
    public function demo(){
        return 'hello world';
    }    
    
    
}
