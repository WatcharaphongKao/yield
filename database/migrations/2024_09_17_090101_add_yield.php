<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('add_yield', function (Blueprint $table) {
            $table->id();
            $table->date('created_at_yeild');
            $table->string('yield_code');
            $table->string('line');
            $table->string('count');
            $table->string('color');
            $table->string('quality');
            $table->integer('type_yield')->default(0);
            $table->string('weight');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('add_yield');
    }
};
