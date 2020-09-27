<?php namespace Tests\Repositories;

use App\Models\typeCompte;
use App\Repositories\typeCompteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class typeCompteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var typeCompteRepository
     */
    protected $typeCompteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->typeCompteRepo = \App::make(typeCompteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->make()->toArray();

        $createdtypeCompte = $this->typeCompteRepo->create($typeCompte);

        $createdtypeCompte = $createdtypeCompte->toArray();
        $this->assertArrayHasKey('id', $createdtypeCompte);
        $this->assertNotNull($createdtypeCompte['id'], 'Created typeCompte must have id specified');
        $this->assertNotNull(typeCompte::find($createdtypeCompte['id']), 'typeCompte with given id must be in DB');
        $this->assertModelData($typeCompte, $createdtypeCompte);
    }

    /**
     * @test read
     */
    public function test_read_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();

        $dbtypeCompte = $this->typeCompteRepo->find($typeCompte->id);

        $dbtypeCompte = $dbtypeCompte->toArray();
        $this->assertModelData($typeCompte->toArray(), $dbtypeCompte);
    }

    /**
     * @test update
     */
    public function test_update_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();
        $faketypeCompte = factory(typeCompte::class)->make()->toArray();

        $updatedtypeCompte = $this->typeCompteRepo->update($faketypeCompte, $typeCompte->id);

        $this->assertModelData($faketypeCompte, $updatedtypeCompte->toArray());
        $dbtypeCompte = $this->typeCompteRepo->find($typeCompte->id);
        $this->assertModelData($faketypeCompte, $dbtypeCompte->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();

        $resp = $this->typeCompteRepo->delete($typeCompte->id);

        $this->assertTrue($resp);
        $this->assertNull(typeCompte::find($typeCompte->id), 'typeCompte should not exist in DB');
    }
}
