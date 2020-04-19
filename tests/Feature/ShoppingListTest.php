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
}
