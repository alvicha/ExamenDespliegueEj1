<?php
use App\DNI;
use PHPUnit\Framework\TestCase;
class DniTest extends TestCase
{
    public function testCalcularLetraDNI()
    {
        $dni = new DNI("12345678");
        $this->assertEquals("12345678Z", $dni->getDNIConLetra());
    }
}
