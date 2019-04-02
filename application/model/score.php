<?php
namespace app\model;
use think\Model;
use think\Db;

class score extends Model
{
    public static function init()
    {
        echo 'score init';
    }

    public function get_score($uid){
//        return   Score::where('uid',$uid)->select();
        $this->where('uid',$uid)->select();
        return   $this->where('uid',$uid)->find();
    }

    public function get_score_all(){
        return   Score::select();
    }

    public function score_save($data){
        if(empty($data['uid'])) return false;
        if(self::get(array('uid'=>$data['uid']))){
            return $this->allowField(true)->save($data,['uid'=>$data['uid']]);
        }else{
            if(Score::save($data)){
                return $this->id;
            }
        }
    }

    public function del($uid){
        return static::destroy(['uid'=>$uid]);
    }
}