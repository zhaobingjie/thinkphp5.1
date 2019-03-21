<?php
/**
 * Created by PhpStorm.
 * User: zhaobingjie
 * Date: 2019/3/20
 * Time: 14:15
 */
namespace app\index\controller;
//use think\App;
use function PHPSTORM_META\type;
use think\Controller;
use think\Request;
//use think\Response;

class Blog extends Controller{
    protected $middleware = ['Check'];
//    protected $request;

    public function __construct()
    {
        parent::__construct();
    }

    public function getIndex(){
        return 'index';
    }

    public function getCat($catid=''){
//        $res = type($catid);
        dump($catid);
//        return 'cat - '.$catid;
    }

    public function getDetail(Request $request){
//        dump($this->request);
//        $id = $this->request->param('id');
//        dump($id);
//        return 'detail - '.$id;
//        dump($request);
//        $id = $request->param('id');
//        dump($id);
        $data['name'] = request()->route('name');
        $data['name_1'] = request()->param('name/a');
        $data['url'] = request()->url();
        $data['url_out'] = request()->url(true);
        $data['is_id'] = request()->has('id');
        $data['list'] = request()->param('list/a');
        $data['method'] = request()->method();
        $data['is_get'] = request()->isGet();
        $data['all'] = request()->param();
        dump($data);
    }
}