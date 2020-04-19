<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCategory()
    {
        $category = factory(\App\Category::class)->create();

        $this->assertDatabaseHas('categories', [
            'name' => $category->name,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCategories()
    {
        $categories = factory(\App\Category::class, 3)->create();

        foreach ($categories as $category) {
            $this->assertDatabaseHas('categories', [
                'name' => $category->name,
            ]);
        }
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCategoryCreatedBy()
    {
        $user = factory(\App\User::class)->create();
        $category = factory(\App\Category::class)->create(['created_by' => $user->id]);

        $this->assertDatabaseHas('categories', [
            'created_by' => $category->createdBy,
            'created_by' => $user->id,
        ]);
    }
}
