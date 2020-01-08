<?php
///**
// * Contact: QQ:30990835, Email: iamwangfei@126.com
// * Created by Wang fei
// * Date: 2018/7/31
// * Time: 12:19
// */
//return [
//    'options' => [
//        'access_key_id' => '1',
//        'access_key_secret' => '2'
//    ]
//
//
//];

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cisco\Aliyunsms\Facades\Aliyunsms;

class UsersController extends Controller
{
    /**
     * send sms to users
     * @param $PhoneNumber user PhoneNumber
     * @param $SignName copy from aliyun
     * @param $TemplateCode copy from aliyun
     * @param $TemplateParam [this param is an array] check from aliyun
     * @return Content
     */
    public function index($PhoneNumber, $SignName, $TemplateCode, $TemplateParam)
    {
        $send = Aliyunsms::sendSms(strval($PhoneNumber), $SignName, $TemplateCode, $TemplateParam);
        if ($send->Code == 'OK') {
            //Success
        } else {
            //failed
        }
    }
}
