<?php

namespace Database\Seeders;

use App\Models\Sms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sms::create([
            'name'=>'play_mobile',
            'nickname'=>'nickname',
            'key'=>'key',
            'secret'=>'secret',
            'token'=>'token',
            'file'=>'file',
            'status'=> 0,
        ]);
        Sms::create([
            'name'=>'eskiz',
            'nickname'=>'nickname',
            'key'=>'key',
            'secret'=>'secret',
            'token'=>'token',
            'file'=>'file',
            'status'=> 0,
        ]);
        Sms::create([
            'name'=>'sysdc',
            'nickname'=>'nickname',
            'key'=>'key',
            'secret'=>'secret',
            'token'=>'token',
            'file'=>'file',
            'status'=> 0,
        ]);
        Sms::create([
            'name'=>'play_mobile_call',
            'nickname'=>'nickname',
            'key'=>'key',
            'secret'=>'secret',
            'token'=>'token',
            'file'=>'file',
            'status'=> 0,
        ]);
    }

}
