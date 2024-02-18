<?php

require_once 'Levelgrade.php';

use PHPUnit\Framework\TestCase;

class LevelGradeTest extends TestCase
{
    public function testPrimeraDivision()
    {
        $this->assertEquals("Primera División.", nivelGrado(60));
        $this->assertEquals("Primera División.", nivelGrado(90));
    }

    public function testSegundaDivision()
    {
        $this->assertEquals("Segunda División.", nivelGrado(45));
        $this->assertEquals("Segunda División.", nivelGrado(59));
    }

    public function testTerceraDivision()
    {
        $this->assertEquals("Tercera División.", nivelGrado(33));
        $this->assertEquals("Tercera División.", nivelGrado(44));
    }

    public function testReprobado()
    {
        $this->assertEquals("Reprobado", nivelGrado(32));
        $this->assertEquals("Reprobado", nivelGrado(0));
    }

    public function testPuntajeNegativo()
    {
        $this->assertEquals("Reprobado", nivelGrado(-10));
    }

    public function testPuntajeMayorQue100()
    {
        $this->assertEquals("Puntaje inválido", nivelGrado(120));
    }
}
