<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    /**
     * @test
     */
    public function a_project_has_path()
    {
        $this->withoutExceptionHandling();

        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/'.$project->id, $project->path());
    }
}
