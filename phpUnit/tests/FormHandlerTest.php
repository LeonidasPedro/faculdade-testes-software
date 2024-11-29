 <?php

   use PHPUnit\Framework\TestCase;
   use App\FormHandler;

   class FormHandlerTest extends TestCase
   {
       public function testValidateName()
       {
           $formHandler = new FormHandler();

           $this->assertFalse($formHandler->validateName('John'));
           $this->assertTrue($formHandler->validateName('John Doe'));
       }

       public function testSaveData()
       {
           $formHandler = new FormHandler();

           $result = $formHandler->saveData('John Doe', '2000-01-01');
           
           $this->assertArrayHasKey('name', $result);
           $this->assertEquals('John Doe', $result['name']);
           $this->assertInstanceOf(\DateTime::class, $result['date']);
           $this->assertEquals('2000-01-01', $result['date']->format('Y-m-d'));
       }
   }
