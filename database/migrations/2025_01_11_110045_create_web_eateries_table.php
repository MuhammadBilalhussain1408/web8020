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
        Schema::create('web_eateries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry_type')->nullable();
            $table->text('purpose')->nullable();
            $table->text('existing_website')->nullable();
            $table->text('example_website')->nullable();
            $table->text('existing_logo')->nullable();
            $table->text('req_assistance')->nullable();
            $table->text('appear_data')->nullable();
            $table->text('req_key_feature')->nullable();
            $table->text('req_integration')->nullable();
            $table->text('existing_hosting_domain')->nullable();
            $table->text('req_completed_date')->nullable();
            $table->text('other_project_info')->nullable();
            $table->text('one_or_multiple_page')->nullable();
            $table->text('agree_terms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_eateries');
    }
};
