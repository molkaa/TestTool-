<?php

namespace TS\AdminBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionPicture
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class QuestionPicture {

    private $file;
    private $tempFilename;

    
  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    //**************functions
    public function getWebPath() {
        return $this->getUploadDir() . '/' .$this->getUrl();
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {

        if (null === $this->file) {
            return;
        }
          $this->url =  sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        // Et on génère l'attribut name de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->name = $this->file->getClientOriginalName();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
            return;
        }
        if (null !== $this->tempFilename) {
            $oldFile = $this->getUploadRootDir() . '/' . $this->id . '.' . $this->tempFilename;
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }
        $this->file->move(
                $this->getUploadRootDir(), // Le répertoire de destination
                $this->url   // Le nom du fichier à créer, ici « id.extension »
        );
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir() . '/' .$this->url;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
            // On supprime le fichier
            unlink($this->tempFilename);
        }
    }

    public function getUploadDir() {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return '../settings/questionPictures/';
    }

    protected function getUploadRootDir() {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__ . '/../../../' . $this->getUploadDir();
    }

    //***** getters & setter

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string 
     */public function getFile() {
        return $this->file;
    }

    public function setFile(UploadedFile $file) {
        $this->file = $file;
        // On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->url) {
            // On sauvegarde l'extension du fichier pour le supprimer plus tard
            $this->tempFilename = $this->url;

            // On réinitialise les valeurs des attributs url et name
            $this->url = null;
            $this->name = null;
        }
    }

    public function getTempFilename() {
        return $this->tempFilename;
    }

    public function setTempFilename($tempFilename) {
        $this->tempFilename = $tempFilename;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return QuestionPicture
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return QuestionPicture
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

  

}
