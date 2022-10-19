<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Incident;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncidentControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_store_incident()
    {
        $response = $this->postJson('/api/incidents', Incident::factory()->make()->toArray());

        $response->assertStatus(201);
    }

    public function test_update_incident()
    {
        $incident = Incident::factory()->create();
        $response = $this->putJson('/api/incidents/'.$incident->id, Incident::factory()->make()->toArray());

        $response->assertStatus(200);
    }

    public function test_show_incident()
    {
        $incident = Incident::factory()->create();
        $response = $this->getJson('api/incidents/'.$incident->id);
        $response->assertStatus(200);
    }

    public function test_delete_incident()
    {
        $incident = Incident::factory()->create();
        $response = $this->deleteJson('api/incidents/'.$incident->id);
        $response->assertStatus(204);
    }

}
