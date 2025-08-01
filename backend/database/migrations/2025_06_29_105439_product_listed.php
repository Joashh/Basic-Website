<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_list' ,function (Blueprint $table)
        {
            $table -> id();
            $table -> String('name');
            $table -> String('description');
            $table -> String('availability');
            $table -> String('category');
            $table -> String('posted_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
