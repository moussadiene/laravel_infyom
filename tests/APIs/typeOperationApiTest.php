<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\typeOperation;

class typeOperationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/type_operations', $typeOperation
        );

        $this->assertApiResponse($typeOperation);
    }

    /**
     * @test
     */
    public function test_read_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/type_operations/'.$typeOperation->id
        );

        $this->assertApiResponse($typeOperation->toArray());
    }

    /**
     * @test
     */
    public function test_update_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();
        $editedtypeOperation = factory(typeOperation::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/type_operations/'.$typeOperation->id,
            $editedtypeOperation
        );

        $this->assertApiResponse($editedtypeOperation);
    }

    /**
     * @test
     */
    public function test_delete_type_operation()
    {
        $typeOperation = factory(typeOperation::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/type_operations/'.$typeOperation->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/type_operations/'.$typeOperation->id
        );

        $this->response->assertStatus(404);
    }
}
