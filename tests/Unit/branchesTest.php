<?php

namespace Tests\Unit;

use Tests\TestCase;

class branchesTest extends TestCase
{

    public function testExample()
    {
        $response = $this->post('/api/branches', ['items']);
        $this->assertEquals(200, $response->status());
    }
}
