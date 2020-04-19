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

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
            'brand' => $product->brand,
        ]);

        $this->assertTrue((\App\Product::find($product->id))->id == $product->id);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductId()
    {
        $productId = 100;

        $product = factory(\App\Product::class)->create(['id' => $productId]);

        $this->assertDatabaseHas('products', [
            'name' => $product->name,
            'brand' => $product->brand,
        ]);

        $this->assertTrue((\App\Product::find($product->id))->id == $productId);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductName()
    {
        $productName = "Rooh Afza";

        $product = factory(\App\Product::class)->create(['name' => $productName]);

        $this->assertDatabaseHas('products', [
            'name' => $productName,
            'brand' => $product->brand,
        ]);

        $this->assertTrue((\App\Product::find($product->id))->name == $productName);
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
            $this->assertDatabaseHas('products', [
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

        $this->assertDatabaseHas('products', [
            'created_by' => $product->createdBy,
            'created_by' => $user->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductMeta()
    {
        $product = factory(\App\Product::class)->create();
        $productMeta = factory(\App\ProductMeta::class)->make();
        $product->meta()->save($productMeta);

        $this->assertDatabaseHas('product_meta', [
            'key' => $productMeta->key,
            'value' => $productMeta->value,
            'product_id' => $product->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductCategories()
    {
        $product = factory(\App\Product::class)->create();
        $category = factory(\App\Category::class)->create();
        $product->categories()->save($category);

        $this->assertDatabaseHas('category_product', [
            'product_id' => $product->id,
            'category_id' => $category->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductVariant()
    {
        $product = factory(\App\Product::class)->create();
        $product->variants()->save(factory(\App\ProductVariant::class)->make());

        $this->assertDatabaseHas('product_variants', [
            'product_id' => $product->id
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductVariantMeta()
    {
        $product = factory(\App\Product::class)->create();

        $product->variants()->save(
            factory(\App\ProductVariant::class)->make()
        )->meta()->save(
            factory(\App\ProductVariantMeta::class)->make()
        );

        $this->assertDatabaseHas('product_variant_meta', [
            'variant_id' => $product->variants()->first()->id
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProductStorePrice()
    {
        // create product and variant
        $product = factory(\App\Product::class)->create();
        $product->variants()->save(factory(\App\ProductVariant::class)->make());
        $variant = $product->variants()->first();

        // create store and branch
        $user = factory(\App\User::class)->create();
        $store = factory(\App\Store::class)->create(['created_by' => $user->id]);
        $store->branches()->save(factory(\App\StoreBranch::class)->make(['created_by' => $user->id]));
        $branch = $store->branches()->first();

        // set product price in branch
        $price = 102.50;
        $variant->store_prices()->save($branch, [
                'variant_id' => $variant->id,
                // 'branch_id' => $branch->id,
                'price' => $price,
                'created_by' => $user->id
            ]);
        
        $this->assertDatabaseHas('product_store_prices', [
            'variant_id' => $variant->id,
            'branch_id' => $branch->id,
            'price' => $price
        ]);
    }
}
