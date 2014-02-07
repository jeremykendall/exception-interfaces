<?php

namespace JeremyKendall\Exception\Tests;

use JeremyKendall\Exception\EdgeCases\ThatsJustSilly;

class EITest extends \PHPUnit_Framework_TestCase
{
    public function testThatsJustSillyException() 
    {
        $this->setExpectedException('\JeremyKendall\Exception\EdgeCases\ThatsJustSilly');
        throw new ExampleException();
    }

}

