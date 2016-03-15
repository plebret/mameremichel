<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Morceau de musique
 * 
 * 
 * @ORM\Entity
 * 
 */
class Tune {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Titre du morceau
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $title;
    
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }


    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }    
}
