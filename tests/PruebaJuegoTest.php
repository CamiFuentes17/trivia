<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PruebaJuegoTest extends TestCase 
{
    public function testValidarRespuestaIncorrecta()
    {
        $bandera=true;
        $this->assertSame(true, $bandera);
}
}
