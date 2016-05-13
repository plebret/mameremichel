<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Prise de contact
 * 
 * 
 * @ORM\Entity
 * 
 */
class Contact {
    use ORMBehaviors\Timestampable\Timestampable;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Nom du contact
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $name;
    
    /**
     * Adresse mail du contact
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */     
    protected $email; 
    
    /**
     * Sujet de la prise de contact
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     */ 
    protected $subject; 
    
    /**
     * Message à envoyer
     * 
     * @ORM\Column(type="text", nullable=true)
     * 
     * @var string
     */ 
    protected $message;
    
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
    
    public function getName() {
        return $this->name;
    }    
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getEmail() {
        return $this->email;
    }    
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getSubject() {
        return $this->subject;
    }    
    
    public function setSubject($subject) {
        $this->subject = $subject;
    }
    
    public function getMessage() {
        return $this->message;
    }    
    
    public function setMessage($message) {
        $this->message = $message;
    }
    
    public function getLocale() {
        return $this->locale;
    }    
    
    public function setLocale($locale) {
        $this->locale = $locale;
    }
}
