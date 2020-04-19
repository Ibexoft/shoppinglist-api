<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShoppingListTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShoppingList()
    {
        $user = factory(\App\User::class)->create();
        $shoppingList = factory(\App\ShoppingList::class)->create(['user_id' => $user->id]);

        $this->assertDatabaseHas('shopping_lists', [
            'title' => $shoppingList->title,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShoppingLists()
    {
        $user = factory(\App\User::class)->create();
        $shoppingList = factory(\App\ShoppingList::class, 3)->create(['user_id' => $user->id]);

        foreach ($shoppingList as $shoppingList) {
            $this->assertDatabaseHas('shopping_lists', [
                'title' => $shoppingList->title,
            ]);
        }
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShoppingListUser()
    {
        $user = factory(\App\User::class)->create();
        $shoppingList = factory(\App\ShoppingList::class)->create(['user_id' => $user->id]);

        $this->assertDatabaseHas('shopping_lists', [
            'user_id' => $shoppingList->userId,
            'user_id' => $user->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShoppingListProducts()
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

        // create shopping list-group-
        $shoppingList = factory(\App\ShoppingList::class)->create(['user_id' => $user->id]);
        $shoppingList->product_lists()->save($variant, [
            'quantity' => 2,
            'branch_id' => $branch->id
        ]);
        
        $this->assertDatabaseHas('shopping_list_products', [
            'shopping_list_id' => $shoppingList->id,
            'variant_id' => $variant->id,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUpdateShoppingListProducts()
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

        // create shopping list-group-
        $shoppingList = factory(\App\ShoppingList::class)->create(['user_id' => $user->id]);
        $shoppingList->product_lists()->save($variant, [
            'quantity' => 2,
            'branch_id' => $branch->id
        ]);

        // update shopping list
        $shoppingList->product_lists()->updateExistingPivot($variant->id, [
            'buying_date' => now(),
            'buying_price' => $price
        ]);

        $this->assertDatabaseHas('shopping_list_products', [
            'shopping_list_id' => $shoppingList->id,
            'variant_id' => $variant->id,
            'branch_id' => $branch->id,
            'buying_price' => $price
        ]);
    }
}
