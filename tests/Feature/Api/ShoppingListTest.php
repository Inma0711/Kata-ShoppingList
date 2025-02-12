<?php

namespace Tests\Feature\Api;

use App\Models\Shopping_List;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShoppingListTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckThatAStationEntryIsDeletedProperly()
    {
        $shoppinglist = Shopping_List::factory(2)->create();
        $shoppinglist = $shoppinglist->first()->id;
        $response = $this->delete(route('apiDestroyShoppingList', $shoppinglist));
        $this->assertDatabaseCount('shopping_list', 1);
        $response = $this->get(route('apiShoppingListHome'));
        $response->assertJsonCount(1);
    }
}
