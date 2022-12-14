<?php

namespace App\Tests\Entity;

use App\Entity\Dinosaur;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DinosaurTest extends KernelTestCase
{

    public function testSettingLength()
    {
       $dinosaur = new Dinosaur();
       $this->assertSame(0,$dinosaur->getLength());
       $dinosaur->setLength(9);
       $this->assertSame(9,$dinosaur->getLength());

    }
    public function testDinosaurHasNotShrunk()
    {
        $dinosaur = new Dinosaur();
        $dinosaur->setLength(13);
        $this->assertGreaterThan(12, $dinosaur->getLength(), 'Did you put it in the washing machine?');
    }

    public function testReturnsFullSpecificationOfDinosaur()
    {
        $dinosaur = new Dinosaur();
        $this->assertSame(
            'The Unknown non-carnivorous dinosaur is 0 meters long',
            $dinosaur->getSpecification()
        );
    }

    public function testReturnsFullSpecificationForTyrannosaurus()
    {
        $dinosaur = new Dinosaur('Tyrannosaurus', true);
        $dinosaur->setLength(12);
         $this->assertSame(
            'The Tyrannosaurus carnivorous dinosaur is 12 meters long',
            $dinosaur->getSpecification()
        );
    }
}
