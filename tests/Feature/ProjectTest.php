<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $attributes = array(
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        );

        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);
    }
}
