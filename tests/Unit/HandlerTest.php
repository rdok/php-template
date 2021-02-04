<?php

namespace Tests\Unit;

use Acme\Handler;
use Acme\Ipsum;
use Acme\Lorem;
use PHPUnit\Framework\TestCase;

class HandlerTest extends TestCase
{
    /** @test */
    public function delegates_lorem_job_to_ipsum()
    {
        $lorem = $this->createMock(Lorem::class);
        $lorem->expects($this->once())
            ->method('loremHandle')
            ->willReturn('foo');;

        $ipsum = $this->createMock(Ipsum::class);
        $ipsum->expects($this->once())
            ->method('ipsumHandle')
            ->with('foo');

        $handler = new Handler($lorem, $ipsum);
        $handler->handle();
    }
}
