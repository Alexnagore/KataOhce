<?php

namespace AlexNagore\Ohce\Test;

use AlexNagore\Ohce\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function givenNameReturnsBuenasNochesName(): void
    {
        $ohce = new Ohce();
        $response = $ohce->saludo("Alex");
        $this->assertEquals("¡Buenas noches Alex!", $response);
    }

}