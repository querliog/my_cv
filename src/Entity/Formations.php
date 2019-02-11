<?php

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**@ORM\Entity(repositoryClass="AppBundle\RepositoryFormationRepository")
 * @ORM\Table(name="app_formation")
 * 
 * @UniqueEntity("name")
 */

class Formation {
    /**
     * @ORM\Id
     * @ORM\Column(type="integrer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */ 

    protected $id;
    
    /**
     * @var string
     * 
     * @Groups({"user"})
     * 
     * @ORM\Column(type="string", name="name")
     */
     
     private $name;
    
}
