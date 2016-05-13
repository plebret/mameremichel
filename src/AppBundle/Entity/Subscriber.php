<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Abonné à la newsletter
 * 
 * 
 * @ORM\Entity
 * 
 */
class Subscriber {
    use ORMBehaviors\Timestampable\Timestampable;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Adresse mail de l'abonné
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */     
    protected $email; 
    
    /**
     * Status de l'abonnement
     * 
     * @ORM\Column(type="boolean", nullable=true)
     */ 
    protected $status;
    
    /**
     * langue de visite utilisée au moment de la prise de contact
     * 
     * @ORM\Column(type="string", length=5, nullable=true)
     */     
    protected $locale;
    
    public function getId() {
        return $this->id;
    }    
    
    public function setId($id) {
        $this->id = $id;
    }    
    
    public function getEmail() {
        return $this->email;
    }    
    
    public function setEmail($email) {
        $this->email = $email;
    } 
    
    public function getStatus() {
        return $this->status;
    }    
    
    public function setStatus($status) {
        $this->status = $status;
    }
    
    public function getLocale() {
        return $this->locale;
    }    
    
    public function setLocale($locale) {
        $this->locale = $locale;
    }
}