<?php
namespace app\index\controller;
use app\model\students;
use app\model\score;
use think\Controller;
use think\facade\Env;
use think\Request;
use think\Response;
use think\Db;

class Index extends Controller
{
    public function index()
    {
//        $res = ENV::get('app_path');
//        dump($res);
        $data['method'] = __METHOD__;
        $data['function'] = __FUNCTION__;
        $data['file'] = __FILE__;
        $data['dir'] = __DIR__;
        $data['namespace'] = __NAMESPACE__;
        $data['class'] = __CLASS__;
//        dump($data);
//        return $data;
//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
        $url = url('hello','name=jack');
        dump($url);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    /**
     * @param $str
     * @return mixed
     * @route('annotation/:str')
     */
    public function annotation($str){
        return $str;
    }

    public function testr(Request $request){
//        $data = array('aa','bb',array('cc','dd'));
//        return json($data);
        $data = $request->param();
        dump($data);
//        $str = 'Wellcome to China';
//        return response($str);
    }

    public function testredirect(){
        $data = array('name'=>'jack','age'=>18);
        return redirect('/index/index/testr',$data);

    }

    public function testd(){
        $path = ENV::get('root_path').'upload'.DIRECTORY_SEPARATOR;
        $file = $path.'logo.jpg';
        return download($file,'brand.jpg');
    }

    public function curd(Request $request){
        include 'D:\project\test\application\model\students.php';
//        $map = $request->param();
//        dump($map);
        $r = students::get_info(1);
        dump($r);
//        $r = students::listInfo();
//        dump($r);
//        $r = db('students')->where(array('uid'=>1))->find();
//        dump($r);
//        $r = db('students')->where(array('uid'=>1))->value('name');/// 返回某个字段的值
//        dump($r);
//        $r = db('students')->column('name','uid');/// 查询某一列的值可以用 // 指定id字段的值作为索引
//        dump($r);
//        $r = db('students')->column(['name','intro'],'uid');/// 查询某一列的值可以用 // 指定id字段的值作为索引
//        dump($r);
//        $data = array(
//            'name' => 'sf',
//            'age' => 23,
//            'sex' => 1,
//            'intro' => 'ewtaweta'
//        );
//        $r = students::add($data);
//        dump($r);
//        $data_arr = array(
//            array(
//                'name' => 'sf1',
//                'age' => 23,
//                'sex' => 1,
//                'intro' => 'ewtaweta'
//            ),
//            array(
//                'name' => 'sf2',
//                'age' => 23,
//                'sex' => 1,
//                'intro' => 'ewtaweta'
//            ),
//            array(
//                'name' => 'sf3',
//                'age' => 23,
//                'sex' => 1,
//                'intro' => 'ewtaweta'
//            ),
//        );
//        $r = students::multiAdd($data_arr);
//        dump($r);
//        $uid = 1;
//        $data = array(
//            'name' => 'LQjack',
//            'intro' => '哈哈哈哈哈'
//        );
//        $r = students::edit($uid,$data);
//        dump($r);
//        Db::name('students')
//            ->where('uid',1)
//            ->inc('age')
//            ->dec('hits',-3)
//            ->exp('name','UPPER(name)')
//            ->update();
//        echo Db::name('students')
//            ->where('uid',1)
//            ->inc('age')
//            ->dec('hits',-3)
//            ->exp('name','UPPER(name)')
//            ->fetchSql(true)//输出sql语句
//            ->update();
    }

    public function tmodel(){
        $score_model = new score();
        $uid = 1;
        $data = array(
            'math' =>91,
            'chinese' => '99',
            'english' => '88',
            'uid' => $uid,
            'sports' => 100
        );
//        $res = $score_model->score_save($data);
//        dump($res);
        $res = $score_model->get_score($uid);
        dump($res);
//        $res = $score_model->del($uid);
//        dump($res);
    }
}
