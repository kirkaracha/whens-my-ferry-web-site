<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatternsTable extends Migration
{
    public function up(): void
    {
        Schema::create('patterns', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('api_id');
            $table->text('name');

            $table->softDeletes();
            $table->timestamps();
        });
    }
}
