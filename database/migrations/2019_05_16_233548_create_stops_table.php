<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopsTable extends Migration
{
    public function up(): void
    {
        Schema::create('stops', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('api_id')->unique();
            $table->string('name')->unique();
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->string('stop_type');

            $table->softDeletes();
            $table->timestamps();
        });
    }
}

/*
"id": "12030042",
"Name": "Alameda Main Street",
"Location": {
    "Longitude": "-122.2941569021",
    "Latitude": "37.7911533139"
},
"StopType": "ferryStop"
 */