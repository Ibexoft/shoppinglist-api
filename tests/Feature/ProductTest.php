<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProduct()
    {
        $product = factory(\App\Product::class)->create();

        $this->assertDatabaseHas('Products', [
            'name' => $product->name,
            'brand' => $product->brand,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProducts()
    {
        $products = factory(\App\Product::class, 3)->create();

        foreach ($products as $product) {
            $this->assertDatabaseHas('Products', [
                'name' => $product->name,
                'brand' => $product->brand,
            ]);
        }
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductCreatedBy()
    {
        $user = factory(\App\User::class)->create();
        $product = factory(\App\Product::class)->create(['created_by' => $user->id]);

        $this->assertDatabaseHas('Products', [
            'created_by' => $product->createdBy,
            'created_by' => $user->id,
        ]);
    }
}
