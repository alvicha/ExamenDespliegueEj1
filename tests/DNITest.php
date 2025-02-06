<?php
use App\DNI;
use PHPUnit\Framework\TestCase;
class DniTest extends TestCase
{
    public function testCalcularLetraDNI()
    {
        $dni = new DNI("12345678Z");
        $this->assertEquals("70941309V", $dni->getDNIConLetra());
    }
}
