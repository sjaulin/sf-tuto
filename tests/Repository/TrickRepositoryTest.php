<?php

namespace App\Tests\Repository;

use App\DataFixtures\TrickFixtures;
use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Test\kernelTestCase;
use Liip\TestFixturesBundle\Test\FixturesTrait;

class TrickRepositoryTest extends kernelTestCase
{
    use FixturesTrait;

    public function testCount()
    {

        self::bootkernel();
        $this->loadFixtures([
            TrickFixtures::class,
        ]);
        $categories = self::$container->get(TrickRepository::class)->count([]);
        $this->assertEquals(10, $categories);
    }
}
