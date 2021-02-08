<?php

namespace Tests\Unit;

use tests\TestCase;

class newCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->post('/api/branch', ['message']);
        $this->assertEquals(200, $response->status());
    }
}
