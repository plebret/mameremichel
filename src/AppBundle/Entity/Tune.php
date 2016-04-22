<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Morceau de musique
 * 
 * 
 * @ORM\Entity
 * 
 */
class Tune {
    use ORMBehaviors\Translatable\Translatable;
    
    const TYPE_STUDIO   = "studio";
    const TYPE_LIVE     = "concert";
    const TYPE_DEMO     = "demo";
    
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
    
    /**
     * Type de morceau
     * 
     * @ORM\Column(type="string", length=25, nullable=true)
     * 
     * @var string
     */
    protected $type;
    
    /**
     * Liste de fichiers audio du morceaux
     * 
     * @ORM\Column(type="array", nullable=true)
     *
     * @var array
     */ 
    protected $audioFiles;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event", inversedBy="tunes"))
     */
    protected $event;    
    
    /**
     * Auteur des paroles
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $author;    
    
    /**
     * Compositeur de la musique
     * 
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @var string
     */
    protected $compositor;    
    
    public function __construct(){
        //$this->audioFiles = array();
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAudioFiles() {
        return $this->audioFiles;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }    
    
    public function setAudioFiles($audioFiles) {
        $this->audioFiles = $audioFiles;
    }
    
    public function getEvent() {
        return $this->event;
    }
    
    public function setEvent($event) {
        $this->event = $event;
    }   
    
    public function getType() {
        return $this->type;
    }
    
    public function setType($type) {
        $this->type = $type;
    }   
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function setAuthor($compositor) {
        $this->compositor = $compositor;
    } 
    
    public function getCompositor() {
        return $this->compositor;
    }
    
    public function setCompositor($compositor) {
        $this->compositor = $compositor;
    }
    
    public function __call($method, $arguments)
    {
        return $this->proxyCurrentLocaleTranslation($method, $arguments);
    }
}
