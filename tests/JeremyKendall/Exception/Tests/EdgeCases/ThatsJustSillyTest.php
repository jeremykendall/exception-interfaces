<?php

namespace JeremyKendall\Exception\Tests\EdgeCases;

use JeremyKendall\Exception\EdgeCases\ThatsJustSilly;

class ThatsJustSillyTest extends \PHPUnit_Framework_TestCase
{
    public function testThatsJustSillyException()
    {
        try {
            throw new ThatsJustSillyTestException();
        } catch (ThatsJustSillyTestException $e) {
            $this->assertInstanceOf('JeremyKendall\Exception\EdgeCases\ThatsJustSilly', $e);
        }
    }
}

class ThatsJustSillyTestException extends \Exception implements ThatsJustSilly
{
}
