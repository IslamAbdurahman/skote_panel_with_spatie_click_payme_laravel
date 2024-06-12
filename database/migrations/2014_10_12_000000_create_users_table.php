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
            $table->string('username')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->date('dob')->nullable();
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'phone' => '998911157709',
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
