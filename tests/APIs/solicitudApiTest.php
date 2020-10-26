<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\solicitud;

class solicitudApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_solicitud()
    {
        $solicitud = factory(solicitud::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/solicituds', $solicitud
        );

        $this->assertApiResponse($solicitud);
    }

    /**
     * @test
     */
    public function test_read_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/solicituds/'.$solicitud->id
        );

        $this->assertApiResponse($solicitud->toArray());
    }

    /**
     * @test
     */
    public function test_update_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();
        $editedsolicitud = factory(solicitud::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/solicituds/'.$solicitud->id,
            $editedsolicitud
        );

        $this->assertApiResponse($editedsolicitud);
    }

    /**
     * @test
     */
    public function test_delete_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/solicituds/'.$solicitud->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/solicituds/'.$solicitud->id
        );

        $this->response->assertStatus(404);
    }
}
