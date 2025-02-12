<?php

use Illuminate\Http\Request;
use App\Models\Shopping_List;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShoppingListController;

Route::get('/shoppinglist', [ShoppingListController::class, 'index'])->name('apiShoppingListtHome');
Route::delete('/shoppinglist/{id}', [ShoppingListController::class, 'destroy'])->name('apiDestroyShoppingList');
Route::post('/shoppinglist', [ShoppingListController::class, 'store'])->name('apiStoreShoppingList');
Route::put('/shoppinglist/{id}', [ShoppingListController::class, 'update'])->name('apiUpdateShoppingList');
Route::delete('/shoppinglist', [ShoppingListController::class, 'destroyall'])->name('apiDestroyAllShoppingList');