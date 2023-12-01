<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->text('avatar');
            $table->integer('phone')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name' => 'admin',
            'dob'=>'2000-10-10',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'email_verified_at'=>'2022-01-02 17:04:58',
            'avatar' => 'images/avatar-1.jpg','created_at' => now(),
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
