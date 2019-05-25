<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinesTable extends Migration
{
    public function up(): void
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('api_id')->unique();
            $table->string('name')->unique();
            $table->string('transport_mode');
            $table->string('public_code');
            $table->string('siri_line_ref')->nullable();
            $table->boolean('monitored')->default(false);
            $table->char('operator_ref', 2);

            $table->softDeletes();
            $table->timestamps();
        });
    }
}

/*
"Id": "South SF - HB",
"Name": "South San Francisco - Harbor Bay",
"TransportMode": "ferry",
"PublicCode": "South SF - HB",
"SiriLineRef": "",
"Montiored": false,
"OperatorRef": "SB"
*/
