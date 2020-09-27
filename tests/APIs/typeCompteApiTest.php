<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\typeCompte;

class typeCompteApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/type_comptes', $typeCompte
        );

        $this->assertApiResponse($typeCompte);
    }

    /**
     * @test
     */
    public function test_read_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/type_comptes/'.$typeCompte->id
        );

        $this->assertApiResponse($typeCompte->toArray());
    }

    /**
     * @test
     */
    public function test_update_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();
        $editedtypeCompte = factory(typeCompte::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/type_comptes/'.$typeCompte->id,
            $editedtypeCompte
        );

        $this->assertApiResponse($editedtypeCompte);
    }

    /**
     * @test
     */
    public function test_delete_type_compte()
    {
        $typeCompte = factory(typeCompte::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/type_comptes/'.$typeCompte->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/type_comptes/'.$typeCompte->id
        );

        $this->response->assertStatus(404);
    }
}
