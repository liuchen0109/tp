<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    $data=M('tpgoods');
    // dump($data->select());
    $info=$data->query('select *,tpgoods.name as gname,tpgoods.id as gid,cate.name as cname,cate.id as cid from tpgoods,cate where tpgoods.cate=cate.id');
    // var_dump($info);
    $this->assign("info",$info);
    $this->display('index/index');
    }
    public function add(){
    	$list=self::getCate();
    	// dump($list);
    	$this->assign("list",$list);
    	$this->display("index/add");
    }
    public static function getCate(){
    	$m=M('cate');
    	
     $list=$m->query('select *,concat(path,",",id) as paths from cate order by paths');
    foreach($list as $key=>$value){
        $s=$value['path'];
        $arr=explode(",",$s);
        $len=count($arr);
        $dlen=$len-1;
        $list[$key]['name']=str_repeat("--|",$dlen).$value['name'];
  }
  return $list;
}

function doadd(){
	 $upload = new \Think\Upload();// 实例化上传类
	$upload->rootPath   =  './';   
    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->savePath =  './Uploads/';// 设置附件上传目录
    $info=$upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{
    	foreach($info as $file){
    			$url="/tp".$file['savepath'].$file['savename'];
    			$data['pic']=$url;
    		}
		$data['name']=$_POST['name'];
		$data['price']=$_POST['price'];
		$data['descr']=$_POST['descr'];
		$data['cate']=$_POST['cate'];
		$data['state']=$_POST['state'];
		 $m=M("tpgoods");
		 if($m->add($data)){
		 	$this->success('上传成功','goods.php?m=home&c=index&a=index');
		 }else{
		 	$this->error('上传失败');
		 }
    }
}

public function delete($id){
	$m=M('tpgoods');
	$info=$m->where('id='.$id)->delete();
	if($info){
		$this->success('删除成功',"goods.php?&m=home&a=index&c=index");
	}else{
		$this->error("删除失败");
	}
}
public function update($id){
	$m=M('tpgoods');
    $cate=self::getCate();
	$list=$m->query('select *,tpgoods.name as gname,tpgoods.id as gid,cate.id as cid,cate.name as cname from tpgoods,cate  where   cate.id=tpgoods.cate and tpgoods.id='.$id);
	// dump($list);
	$this->assign('cate',$cate);
	$this->assign('list',$list);
	$this->display('index/update');
}
public function edit(){

	$id = $_POST['id'];
	$data['name']=$_POST['name'];
		$data['price']=$_POST['price'];
		$data['descr']=$_POST['descr'];
		$data['cate']=$_POST['cate'];
		$data['state']=$_POST['state'];
if(!empty($_FILES['pic']['name'])){
	$upload = new \Think\Upload();// 实例化上传类
	$upload->rootPath   =  './';   
    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->savePath =  './Uploads/';// 设置附件上传目录
    $info=$upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{
    	foreach($info as $file){
    			$url="/tp".$file['savepath'].$file['savename'];
    			$data['pic']=$url;
    		}
}

}
$m=M('tpgoods');
if($m->where("id=".$id)->save($data)){
	$this->success('修改成功','goods.php?m=home&c=index&a=index');
}else{
	$this->error('修改失败');
}
}
}