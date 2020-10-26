<?php namespace Tests\Repositories;

use App\Models\tramite;
use App\Repositories\tramiteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class tramiteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var tramiteRepository
     */
    protected $tramiteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tramiteRepo = \App::make(tramiteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tramite()
    {
        $tramite = factory(tramite::class)->make()->toArray();

        $createdtramite = $this->tramiteRepo->create($tramite);

        $createdtramite = $createdtramite->toArray();
        $this->assertArrayHasKey('id', $createdtramite);
        $this->assertNotNull($createdtramite['id'], 'Created tramite must have id specified');
        $this->assertNotNull(tramite::find($createdtramite['id']), 'tramite with given id must be in DB');
        $this->assertModelData($tramite, $createdtramite);
    }

    /**
     * @test read
     */
    public function test_read_tramite()
    {
        $tramite = factory(tramite::class)->create();

        $dbtramite = $this->tramiteRepo->find($tramite->id);

        $dbtramite = $dbtramite->toArray();
        $this->assertModelData($tramite->toArray(), $dbtramite);
    }

    /**
     * @test update
     */
    public function test_update_tramite()
    {
        $tramite = factory(tramite::class)->create();
        $faketramite = factory(tramite::class)->make()->toArray();

        $updatedtramite = $this->tramiteRepo->update($faketramite, $tramite->id);

        $this->assertModelData($faketramite, $updatedtramite->toArray());
        $dbtramite = $this->tramiteRepo->find($tramite->id);
        $this->assertModelData($faketramite, $dbtramite->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tramite()
    {
        $tramite = factory(tramite::class)->create();

        $resp = $this->tramiteRepo->delete($tramite->id);

        $this->assertTrue($resp);
        $this->assertNull(tramite::find($tramite->id), 'tramite should not exist in DB');
    }
}
