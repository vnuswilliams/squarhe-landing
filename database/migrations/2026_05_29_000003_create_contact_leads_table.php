<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_leads', function (Blueprint $table): void {
            $table->id();
            $table->string('company_name');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->unsignedInteger('employees_count')->nullable();
            $table->text('message')->nullable();
            $table->boolean('consent')->default(false);
            $table->timestamps();

            $table->index('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_leads');
    }
};
