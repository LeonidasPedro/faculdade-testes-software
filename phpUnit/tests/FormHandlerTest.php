<?php

use PHPUnit\Framework\TestCase;
use App\FormHandler;

class FormHandlerTest extends TestCase
{
    public function testValidateName()
    {
        $formHandler = new FormHandler();

        $this->assertFalse($formHandler->validateName('Zé'));
        $this->assertTrue($formHandler->validateName('José Fernando da Silva'));
    }

    public function testSaveData()
    {
        $formHandler = new FormHandler();

        $result = $formHandler->saveData('José Fernando da Silva', '2000-01-01');
        
        $this->assertArrayHasKey('name', $result);
        $this->assertEquals('José Fernando da Silva', $result['name']);
        $this->assertInstanceOf(\DateTime::class, $result['date']);
        $this->assertEquals('2000-01-01', $result['date']->format('Y-m-d'));
    }
} 
