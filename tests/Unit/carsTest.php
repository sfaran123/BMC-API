<?php

namespace Tests\Unit;

use Tests\TestCase;

class carsTest extends TestCase
{

    public function testExample()
    {
        $response = $this->post('/api/cars', ['items']);
        $this->assertEquals(200, $response->status());
    }
}
