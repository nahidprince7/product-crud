<?php
use Illuminate\Support\Facades\Route;
use Nahid\Crud\ProductController;

Route::middleware(['web'])->prefix('product')->group(function () {

    Route::get('/',[ProductController::class, 'index'])->name('product-list');

    Route::get('/create',[ProductController::class, 'create'])->name('product-create');


    Route::get('/edit/{id}', [  ProductController::class, 'edit'])
        ->name('product-edit');

    Route::post( '/add', [  ProductController::class, 'store'])
        ->name('product-store');

    Route::post( '/update/{id}',  [ ProductController::class, 'update'])
        ->name('product-update');

    Route::post( 'trash', [ ProductController::class, 'moveToTrash'])
        ->name('trash-product');

});
