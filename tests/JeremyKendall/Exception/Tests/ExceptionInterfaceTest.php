<?php

namespace EI\Tests;

use EI\EdgeCases\ThatsJustSilly;

class EITest extends \PHPUnit_Framework_TestCase
{
    public function testThatsJustSillyException() 
    {
        $this->setExpectedException('\EI\EdgeCases\ThatsJustSilly');
        throw new ExampleException();
    }

}

