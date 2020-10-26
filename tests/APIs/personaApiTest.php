<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\persona;

class personaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_persona()
    {
        $persona = factory(persona::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/personas', $persona
        );

        $this->assertApiResponse($persona);
    }

    /**
     * @test
     */
    public function test_read_persona()
    {
        $persona = factory(persona::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/personas/'.$persona->id
        );

        $this->assertApiResponse($persona->toArray());
    }

    /**
     * @test
     */
    public function test_update_persona()
    {
        $persona = factory(persona::class)->create();
        $editedpersona = factory(persona::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/personas/'.$persona->id,
            $editedpersona
        );

        $this->assertApiResponse($editedpersona);
    }

    /**
     * @test
     */
    public function test_delete_persona()
    {
        $persona = factory(persona::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/personas/'.$persona->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/personas/'.$persona->id
        );

        $this->response->assertStatus(404);
    }
}
