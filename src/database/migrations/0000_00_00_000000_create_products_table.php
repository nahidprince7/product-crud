<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('short_descriptions')->nullable();
            $table->boolean('active_status')->default(0)->comment('0 => inactive, 1 => active');

            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('created_by')->default(0)->comment('0=automatically');
            $table->bigInteger('updated_by')->default(0)->comment('0=automatically');
            $table->bigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
