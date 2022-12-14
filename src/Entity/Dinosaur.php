<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dinosaurs")
 */
class Dinosaur
{
    /**
     * @ORM\Column(type="integer")
     */
    private $length = 0;

    public function getLength(): int
    {
            return $this->length;
    }

    public function setLength(int $length) 
    {
        $this->length = $length;
    }
    public function getSpecification()
    {
        return 'The Unknown non-carnivorous dinosaur is 0 meters long';
    }

   

}
