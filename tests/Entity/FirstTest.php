<?php

namespace App\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FirstTest extends KernelTestCase
{

    public function testThatMyLocalMachineWorks()
    {
        self::bootKernel([
            'environment' => 'my_test_env',
            'debug'       => false,
        ]);

        $this->assertTrue(true);

    }
}