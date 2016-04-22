<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Membre du groupe
 * 
 * 
 * @ORM\Entity
 * 
 */
class Player {
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Prénom du joueur
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $firstname;
    
    /**
     * Nom du joueur
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $lastname;
    
    /**
     * protrait du joueur
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $image;   
    
    public function getId() {
        return $this->id;
    }    
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getFirstname() {
        return $this->firstname;
    }    
    
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }   
    
    public function getLastname() {
        return $this->lastname;
    }    
    
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }  
    
    public function getImage() {
        return $this->image;
    }    
    
    public function setImage($image) {
        $this->image = $image;
    }  
    
    public function __call($method, $arguments)
    {
        return $this->proxyCurrentLocaleTranslation($method, $arguments);
    }      
}