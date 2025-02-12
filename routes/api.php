<?php

use Illuminate\Http\Request;
use App\Models\Shopping_List;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\ShoppingListController;

Route::get('/shoppinglist', [ShoppingListController::class, 'index'])->name('apiShoppingListtHome');
Route::get('/articles', [ArticleController::class, 'index'])->name('apiArticletHome');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('apiDestroyArticle');
Route::post('/articles', [ArticleController::class, 'store'])->name('apiStoreArticle');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('apiUpdateArticle');