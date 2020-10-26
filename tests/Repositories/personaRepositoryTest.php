<?php namespace Tests\Repositories;

use App\Models\persona;
use App\Repositories\personaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class personaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var personaRepository
     */
    protected $personaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->personaRepo = \App::make(personaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_persona()
    {
        $persona = factory(persona::class)->make()->toArray();

        $createdpersona = $this->personaRepo->create($persona);

        $createdpersona = $createdpersona->toArray();
        $this->assertArrayHasKey('id', $createdpersona);
        $this->assertNotNull($createdpersona['id'], 'Created persona must have id specified');
        $this->assertNotNull(persona::find($createdpersona['id']), 'persona with given id must be in DB');
        $this->assertModelData($persona, $createdpersona);
    }

    /**
     * @test read
     */
    public function test_read_persona()
    {
        $persona = factory(persona::class)->create();

        $dbpersona = $this->personaRepo->find($persona->id);

        $dbpersona = $dbpersona->toArray();
        $this->assertModelData($persona->toArray(), $dbpersona);
    }

    /**
     * @test update
     */
    public function test_update_persona()
    {
        $persona = factory(persona::class)->create();
        $fakepersona = factory(persona::class)->make()->toArray();

        $updatedpersona = $this->personaRepo->update($fakepersona, $persona->id);

        $this->assertModelData($fakepersona, $updatedpersona->toArray());
        $dbpersona = $this->personaRepo->find($persona->id);
        $this->assertModelData($fakepersona, $dbpersona->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_persona()
    {
        $persona = factory(persona::class)->create();

        $resp = $this->personaRepo->delete($persona->id);

        $this->assertTrue($resp);
        $this->assertNull(persona::find($persona->id), 'persona should not exist in DB');
    }
}
