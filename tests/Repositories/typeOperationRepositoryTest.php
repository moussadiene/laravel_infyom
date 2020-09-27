<?php namespace Tests\Repositories;

use App\Models\typeOperation;
use App\Repositories\typeOperationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class typeOperationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var typeOperationRepository
     */
    protected $typeOperationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->typeOperationRepo = \App::make(typeOperationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->make()->toArray();

        $createdtypeOperation = $this->typeOperationRepo->create($typeOperation);

        $createdtypeOperation = $createdtypeOperation->toArray();
        $this->assertArrayHasKey('id', $createdtypeOperation);
        $this->assertNotNull($createdtypeOperation['id'], 'Created typeOperation must have id specified');
        $this->assertNotNull(typeOperation::find($createdtypeOperation['id']), 'typeOperation with given id must be in DB');
        $this->assertModelData($typeOperation, $createdtypeOperation);
    }

    /**
     * @test read
     */
    public function test_read_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();

        $dbtypeOperation = $this->typeOperationRepo->find($typeOperation->id);

        $dbtypeOperation = $dbtypeOperation->toArray();
        $this->assertModelData($typeOperation->toArray(), $dbtypeOperation);
    }

    /**
     * @test update
     */
    public function test_update_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();
        $faketypeOperation = factory(typeOperation::class)->make()->toArray();

        $updatedtypeOperation = $this->typeOperationRepo->update($faketypeOperation, $typeOperation->id);

        $this->assertModelData($faketypeOperation, $updatedtypeOperation->toArray());
        $dbtypeOperation = $this->typeOperationRepo->find($typeOperation->id);
        $this->assertModelData($faketypeOperation, $dbtypeOperation->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();

        $resp = $this->typeOperationRepo->delete($typeOperation->id);

        $this->assertTrue($resp);
        $this->assertNull(typeOperation::find($typeOperation->id), 'typeOperation should not exist in DB');
    }
}
