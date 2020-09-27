<?php namespace Tests\Repositories;

use App\Models\EntrepriseRepository;
use App\Repositories\EntrepriseRepositoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class EntrepriseRepositoryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var EntrepriseRepositoryRepository
     */
    protected $entrepriseRepositoryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->entrepriseRepositoryRepo = \App::make(EntrepriseRepositoryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->make()->toArray();

        $createdEntrepriseRepository = $this->entrepriseRepositoryRepo->create($entrepriseRepository);

        $createdEntrepriseRepository = $createdEntrepriseRepository->toArray();
        $this->assertArrayHasKey('id', $createdEntrepriseRepository);
        $this->assertNotNull($createdEntrepriseRepository['id'], 'Created EntrepriseRepository must have id specified');
        $this->assertNotNull(EntrepriseRepository::find($createdEntrepriseRepository['id']), 'EntrepriseRepository with given id must be in DB');
        $this->assertModelData($entrepriseRepository, $createdEntrepriseRepository);
    }

    /**
     * @test read
     */
    public function test_read_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();

        $dbEntrepriseRepository = $this->entrepriseRepositoryRepo->find($entrepriseRepository->id);

        $dbEntrepriseRepository = $dbEntrepriseRepository->toArray();
        $this->assertModelData($entrepriseRepository->toArray(), $dbEntrepriseRepository);
    }

    /**
     * @test update
     */
    public function test_update_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();
        $fakeEntrepriseRepository = factory(EntrepriseRepository::class)->make()->toArray();

        $updatedEntrepriseRepository = $this->entrepriseRepositoryRepo->update($fakeEntrepriseRepository, $entrepriseRepository->id);

        $this->assertModelData($fakeEntrepriseRepository, $updatedEntrepriseRepository->toArray());
        $dbEntrepriseRepository = $this->entrepriseRepositoryRepo->find($entrepriseRepository->id);
        $this->assertModelData($fakeEntrepriseRepository, $dbEntrepriseRepository->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();

        $resp = $this->entrepriseRepositoryRepo->delete($entrepriseRepository->id);

        $this->assertTrue($resp);
        $this->assertNull(EntrepriseRepository::find($entrepriseRepository->id), 'EntrepriseRepository should not exist in DB');
    }
}
