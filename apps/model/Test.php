<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 2016/10/24
 * Time: 下午4:33
 */

namespace model;


use ZPHP\Core\Db;
use ZPHP\Core\Log;

class Test{

    function __construct()
    {
    }

    public function test($key){
        $data = yield Db::table('user')->where(['id'=>$key])->find();
        return $data;
    }

    public function getUserDetail($id, $name){
        $user = yield Db::table('user')->where(['id'=>$id])->find();
        return ['user'=>$user,'id'=> $id, 'name'=>$name];
    }

    public function getUserById($id){
        $data = yield table('user')->where(['id'=>$id])->find();
        return json_encode($data);
    }
}