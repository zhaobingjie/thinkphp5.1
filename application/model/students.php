<?php
namespace app\model;
use think\Model;
use think\Db;

class students extends model
{
    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    public static function get_info($id){
        if(empty($id)) return false;
        // table方法必须指定完整的数据表名
        return Db::table('students')->where('uid',$id)->find();
    }
    public static function listInfo(){
        // table方法必须指定完整的数据表名
//        return Db::table('students')->select();
        //如果设置了数据表前缀参数的话，可以使用
        //如果你的数据表没有设置表前缀的话，那么name和table方法效果一致。
        return Db::name('students')->select();
    }
    public static function add($data){
        if(empty($data)) return false;
//        return Db::name('students')->insert($data);
        return Db::name('students')->insertGetId($data);
    }
    public static function multiAdd($data){
        if(empty($data)) return false;
        return Db::name('students')->insertAll($data);
    }
    public static function edit($uid,$data){
        if(empty($uid)) return false;
        return Db::name('students')->where('uid',$uid)->update($data);
    }
}