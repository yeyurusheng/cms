<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
class Index extends Controller
{
    //
    public function user($id){
        echo 'ID:'.$id;
        $info=user::where(['brand_id'=>$id])->first()->toArray();
        echo '<pre>';
        print_r($info);
    }
    public function lian(){
        echo 'wangmengwei';
    }
}
