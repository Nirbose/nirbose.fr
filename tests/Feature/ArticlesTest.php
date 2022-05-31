<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticlesTest extends TestCase
{
    /**
     * Create an article.
     * 
     * @return void
     */
    public function testCreateArticle()
    {
        $faker = Factory::create();

        $response = $this->json('POST', '/api/articles', [
            'title' => $faker->sentence,
            'body' => $faker->paragraph,
        ]);

        $response->assertStatus(401);
    }

}
