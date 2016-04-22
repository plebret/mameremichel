<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Partie traductible d'un événement
 * 
 * 
 * @ORM\Entity
 * 
 */
class EventTranslation {
    use ORMBehaviors\Translatable\Translation;
    
    /**
     * Titre de l'évenement
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $title;    
    
    /**
     * Description d'un événement
     * 
     * @ORM\Column(type="text", nullable=true)
     * 
     * @var string
     */ 
    protected $description;
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title; 
    }    
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
}