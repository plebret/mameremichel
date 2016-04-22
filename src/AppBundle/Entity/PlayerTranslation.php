<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Partie traductible d'un membre du groupe
 * 
 * 
 * @ORM\Entity
 * 
 */
class PlayerTranslation {
    use ORMBehaviors\Translatable\Translation;
    
    /**
     * Compétences
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $skills;    
    
    /**
     * Description du joueur (bio, etc..)
     * 
     * @ORM\Column(type="text", nullable=true)
     * 
     * @var string
     */ 
    protected $description;
    
    public function getSkills() {
        return $this->skills;
    }
    
    public function setSkills($skills) {
        $this->skills = $skills; 
    }    
    
    public function getDescription() {
        return $this->description;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
}