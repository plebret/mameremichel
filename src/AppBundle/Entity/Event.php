<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Evénement
 * 
 * 
 * @ORM\Entity
 * 
 */
class Event {
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * Libellé de l'évenement
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $label;
    
    /**
     * Date de l'événement
     * 
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime", nullable=true)
     * 
     */
    protected $date;
    
    /**
     * Lieu de l'événement
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    protected $position;
    
    /**
     * Illustration de l'évenement
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */ 
    protected $image;
    
    /**
     * Liste de fichiers video de l'événement
     * 
     * @ORM\Column(type="array", nullable=true)
     *
     * @var array
     */ 
    protected $videoFiles;
    
    /**
     * Liste des photos de l'événement
     * 
     * @ORM\Column(type="array", nullable=true)
     *
     * @var array
     */ 
    protected $pictureFiles;
    
    /**
     * Liste des morceaux enregistrés pendant l'événement
     * 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tune", mappedBy="event")
     *
     */ 
    protected $tunes;    
    
    public function __construct(){
        $this->tunes = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }    
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getLabel() {
        return $this->label;
    }    
    
    public function setLabel($label) {
        $this->label = $label;
    }    
    
    public function getDate() {
        return $this->date;
    } 
    
    public function setDate(\DateTime $date) {
        $this->date = $date;
    }
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }     
    
    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }  
    
    public function getTunes() {
        return $this->tunes;
    }

    public function setTunes($tunes) {
        $this->tunes = $tunes;
    }    
    
    public function getVideoFiles() {
        return $this->videoFiles;
    }
    
    public function setVideoFiles($videoFiles) {
        $this->videoFiles = $videoFiles;
    }
    
    public function getPictureFiles() {
        return $this->pictureFiles;
    }
    
    public function setPictureFiles($pictureFiles) {
        $this->pictureFiles = $pictureFiles;
    }
    
    public function __call($method, $arguments)
    {
        return $this->proxyCurrentLocaleTranslation($method, $arguments);
    }    
}