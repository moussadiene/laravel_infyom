<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\EntrepriseRepository;

class EntrepriseRepositoryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/entreprise_repositories', $entrepriseRepository
        );

        $this->assertApiResponse($entrepriseRepository);
    }

    /**
     * @test
     */
    public function test_read_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/entreprise_repositories/'.$entrepriseRepository->id
        );

        $this->assertApiResponse($entrepriseRepository->toArray());
    }

    /**
     * @test
     */
    public function test_update_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();
        $editedEntrepriseRepository = factory(EntrepriseRepository::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/entreprise_repositories/'.$entrepriseRepository->id,
            $editedEntrepriseRepository
        );

        $this->assertApiResponse($editedEntrepriseRepository);
    }

    /**
     * @test
     */
    public function test_delete_entreprise_repository()
    {
        $entrepriseRepository = factory(EntrepriseRepository::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/entreprise_repositories/'.$entrepriseRepository->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/entreprise_repositories/'.$entrepriseRepository->id
        );

        $this->response->assertStatus(404);
    }
}
