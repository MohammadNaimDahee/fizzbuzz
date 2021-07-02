<?php

namespace App\Libraries;

use CodeIgniter\Test\CIUnitTestCase;

class FizzBuzzTest extends CIUnitTestCase
{

    public function setUp(): void
    {
        parent::setUp();

        
    }
    public function test_fizz()
    {
        $a = 1;
        $this->assertSame(2, $a);
    }

    public function test_buzz() {
        $a = 1;
        $this->assertSame(1, $a);
    }

    public function test_fizz_buzz() {
        $a = 1;
        $this->assertSame(1, $a);
    }

    public function test_number() {
        $a = 1;
        $this->assertSame(1, $a);
    }
 }
?>