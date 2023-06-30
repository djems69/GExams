<?php

namespace App\Tests\Unit;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\Enseignant;

class EnseignantTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $enseignant = new Enseignant();

        $enseignant->setNom('John');
        $enseignant->setPrenom('Doe');

        self::bootKernel();
        $error = self::$container->get('validator')->validate($enseignant);
        $this->assertCount(0, $error);

    }
}