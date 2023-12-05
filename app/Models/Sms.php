<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Sms extends Model
{
    use HasFactory;

    public static function send_sms($num, $message){
        $service = Sms::where('status','=',1)->first();
        if ($service && $service->name == 'eskiz'){
            $sms = Sms::eskiz($num,$message);
        }elseif ($service && $service->name == 'sysdc'){
            $sms = Sms::sysdc($num,$message);
        }elseif ($service && $service->name == 'play_mobile'){
            $sms = Sms::play_mobile($num,$message);
        }else{
            $sms = 0;
        }

        $obj = new \stdClass();
        $obj->status = $sms;
        $obj->service_id = $service?$service->id:0;
        return $obj;
    }

    public static function eskiz($num, $message){

        $service = Sms::where('name','=','eskiz')->first();

        $diff = Carbon::parse($service->updated_at)->diff(Carbon::parse(now('Asia/Tashkent')))->days;

        if ($diff > 29){
            $url_login = 'notify.eskiz.uz/api/auth/login';

            $res = Http::attach('email', $service->key)
                ->attach('password', $service->secret)
                ->post($url_login);
            $json = json_decode($res);

            $eskiz = Sms::firstOrCreate(['name'=>'eskiz']);
            $eskiz->token = $json->data->token;
            $eskiz->save();
        }

        $service = Sms::where('name','=','eskiz')->first();

        $url = 'https://notify.eskiz.uz/api/message/sms/send';

        $res = Http::withToken($service->token)
            ->attach('mobile_phone', $num)
            ->attach('message', $message)
            ->post($url);

        $json = json_decode($res->body());
        if ($json->status == 'waiting'){
            return 1;
        }else{
            return 0;
        }
    }

    public static function sysdc($num, $message){
        $url = 'https://sms.sysdc.ru/index.php';

        $service = Sms::where('name','=','sysdc')->first();

        $res = Http::withToken($service->token)
            ->attach('mobile_phone', $num)
            ->attach('message', $message)
            ->post($url);

        $json = json_decode($res->body());
        if ($json->status == 'waiting'){
            return 1;
        }else{
            return 0;
        }
    }

    public static function play_mobile($num, $message){

        $service = Sms::where('name','=','play_mobile')->first();

        $data = [
            'recipient'=>$num,
            'message-id'=>'abc000000001',
            'sms'=> [
                'originator'=>$service->nickname,
                'content'=>[
                    'text'=> $message
                ]
            ],
        ];

        $key = $service->key;
        $secret = $service->secret;
        $url = 'http://91.204.239.44/broker-api/send';

        $res = Http::withBasicAuth($key, $secret)
            ->post($url, [
                'messages' => $data
            ]);

        if ($res->body() == 'Request is received'){
            return 1;
        }else{
            return 0;
        }
    }


    public static function phone_call($num){

        $service = Sms::where('name','=','play_mobile_call')->first();

        $data = [
            'recipient'=>$num,
            'message-id'=>'abc000000001',
            'sms'=> [
                'originator'=>$service->nickname,
                'content'=>[
                    "file" => $service->file
                ]
            ],
        ];

        $key = $service->key;
        $secret = $service->secret;
        $url = 'https://send.smsxabar.uz/broker-api/send';

        $res = Http::withBasicAuth($key, $secret)
            ->post($url, [
                'messages' => $data
            ]);

        if ($res->body() == 'Request is received'){
            return 1;
        }else{
            return 0;
        }
    }


}
