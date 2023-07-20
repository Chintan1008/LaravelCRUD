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
        Schema::create('ajaxes', function (Blueprint $table) {
            $table->id();
            $table->string('First_name',60);
            $table->string('Last_name',60);
            $table->string('email',100);
            $table->string('phoneNo',15);
            $table->string('hobbies',10);
            $table->enum('gender',["m","f"]);
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            $table->string('password',255);
            $table->string('country',100);
            $table->string('state',100);
            $table->string('city',100);
            $table->string('userName',100);
            // $table->string('password',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajaxes');
    }
};
