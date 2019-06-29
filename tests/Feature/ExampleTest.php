<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testBasicTest(): void
    {
        $response = $this->get('/');

        $response->assertStatus(self::HTTP_STATUS_OK);
    }
}
