<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    public function up(): void
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('api_id')->unique();
            $table->string('name')->unique();
            $table->string('short_name')->unique();
            $table->string('siri_operator_ref')->nullable();
            $table->string('timezone');
            $table->char('default_language', 2);
            $table->string('contact_telephone_number');
            $table->string('website')->nullable();
            $table->string('primary_mode');
            $table->char('private_code', 2);
            $table->boolean('monitored')->default(false);
            $table->string('other_modes')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }
}
/*
        "Id": "5E",
        "Name": "511 Emergency",
        "ShortName": "511 Emergency",
        "SiriOperatorRef": null,
        "TimeZone": "America/Vancouver",
        "DefaultLanguage": "en",
        "ContactTelephoneNumber": null,
        "WebSite": null,
        "PrimaryMode": "other",
        "PrivateCode": "5E",
        "Montiored": false,
        "OtherModes": ""
 */