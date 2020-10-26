<?php namespace Tests\Repositories;

use App\Models\solicitud;
use App\Repositories\solicitudRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class solicitudRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var solicitudRepository
     */
    protected $solicitudRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->solicitudRepo = \App::make(solicitudRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_solicitud()
    {
        $solicitud = factory(solicitud::class)->make()->toArray();

        $createdsolicitud = $this->solicitudRepo->create($solicitud);

        $createdsolicitud = $createdsolicitud->toArray();
        $this->assertArrayHasKey('id', $createdsolicitud);
        $this->assertNotNull($createdsolicitud['id'], 'Created solicitud must have id specified');
        $this->assertNotNull(solicitud::find($createdsolicitud['id']), 'solicitud with given id must be in DB');
        $this->assertModelData($solicitud, $createdsolicitud);
    }

    /**
     * @test read
     */
    public function test_read_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();

        $dbsolicitud = $this->solicitudRepo->find($solicitud->id);

        $dbsolicitud = $dbsolicitud->toArray();
        $this->assertModelData($solicitud->toArray(), $dbsolicitud);
    }

    /**
     * @test update
     */
    public function test_update_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();
        $fakesolicitud = factory(solicitud::class)->make()->toArray();

        $updatedsolicitud = $this->solicitudRepo->update($fakesolicitud, $solicitud->id);

        $this->assertModelData($fakesolicitud, $updatedsolicitud->toArray());
        $dbsolicitud = $this->solicitudRepo->find($solicitud->id);
        $this->assertModelData($fakesolicitud, $dbsolicitud->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_solicitud()
    {
        $solicitud = factory(solicitud::class)->create();

        $resp = $this->solicitudRepo->delete($solicitud->id);

        $this->assertTrue($resp);
        $this->assertNull(solicitud::find($solicitud->id), 'solicitud should not exist in DB');
    }
}
