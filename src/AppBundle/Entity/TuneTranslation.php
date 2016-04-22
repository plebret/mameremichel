<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Partie traductible d'un morceau de musique
 * 
 * 
 * @ORM\Entity
 * 
 */
class TuneTranslation {
    use ORMBehaviors\Translatable\Translation;
    
    /**
     * Paroles
     * 
     * @ORM\Column(type="text", nullable=true)
     * 
     * @var string
     */ 
    protected $lyrics;
    
    /**
     * Description à propos du morceau
     * 
     * @ORM\Column(type="text", nullable=true)
     * 
     * @var string
     */ 
    protected $description;
    
    public function getLyrics() {
        return $this->lyrics;
    }
    
    public function setLyrics($lyrics) {
        $this->lyrics = $lyrics;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
}