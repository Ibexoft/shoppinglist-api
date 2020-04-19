<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        $store = factory(\App\Store::class)->create();

        $this->assertDatabaseHas('stores', [
            'name' => $store->name,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function teststores()
    {
        $stores = factory(\App\Store::class, 3)->create();

        foreach ($stores as $store) {
            $this->assertDatabaseHas('stores', [
                'name' => $store->name,
            ]);
        }
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreCreatedBy()
    {
        $user = factory(\App\User::class)->create();
        $store = factory(\App\Store::class)->create(['created_by' => $user->id]);

        $this->assertDatabaseHas('stores', [
            'created_by' => $store->createdBy,
            'created_by' => $user->id,
        ]);
    }
}
