<?php

namespace AlexNagore\Ohce\Test;

use AlexNagore\Ohce\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Ohce $ohce;
    protected function setUp()
    {
        parent::setUp();
        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function givenNameAndHourBetween20And6ReturnsBuenasNochesName(): void
    {
        $response = $this->ohce->saludo("Alex", 21);
        $this->assertEquals("¡Buenas noches Alex!", $response);
    }

    /**
     * @test
     */
    public function givenNameAndHourBetween6And12ReturnsBuenosDiasName(): void
    {
        $response = $this->ohce->saludo("Alex", 8);
        $this->assertEquals("¡Buenos días Alex!", $response);
    }

    /**
     * @test
     */
    public function givenNameAndHourBetween12And20ReturnsBuenasTardesName(): void
    {
        $response = $this->ohce->saludo("Alex", 16);
        $this->assertEquals("¡Buenas tardes Alex!", $response);
    }

}