<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
   	// echo "1";
    	// echo __PUBLIC__;
       
    	$data=M('user');
    	
    	 if(!empty($_POST['keywords'])){
        $where['username']=array("like","%".$_POST['keywords']."%");
        $page=new \Think\Page($data->where($where)->Count(),2);
        foreach($where as $key=>$val) {
    // $Page->parameter[$key]  =  urlencode($val);
    // var_dump(urlencode(2));
}
        
         $info=$data->where("username like '%".$_POST['keywords']."%'")->limit($page->firstRow,$page->listRows)->select();
        
        
        }else{
         $count=$data->Count();
         $page=new \Think\Page($count,2);
        $info=$data->limit($page->firstRow,$page->listRows)->select();
        
        }

        
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $show=$page->show();
    	$this->assign('info',$info);
    	$this->assign('page',$show);
    	 $this->display('index/index');
    }
    public function add(){
    	 $this->display('index/add');

    }
    


    public function doAdd(){
    	    $User = D("User"); // 实例化User对象
    if (!$User->create()){
         // 如果创建失败 表示验证没有通过 输出错误提示信息
         foreach($User->getError() as $v){
         	echo $v."<br>";
         }
    }else{
    	  $data=array('username'=>$_POST['username'],'password'=>md5($_POST['password']),'email'=>$_POST['email'],'state'=>1);
    	$d=M('user');
    	if($d->add($data)){
    		$this->success('添加成功','Admin.php?m=home&c=index&a=index');
    		// self::index();

    	}else{
    		$this->error('添加失败');

    	}
         // 验证通过 可以进行其他数据操作
    }
    	 // $_POST['username'];
    }

 public function delete($id){
 	$m=M('user');
 	if($m->where('id = '.$id)->delete()){
    		$this->success('删除成功');
 	}else{
    		$this->error('删除失败');

 	}
 }

//  public function search(){
//  	 $k=$_POST['keywords'];
//  	 $where['username']=array('like',"%".$_POST['keywords']."%");
//  	 $m=M('user');
//  	 // $count=Count($info);

//  	 $page=new \Think\Page($m->where($where)->Count(),2);
//  	 foreach($where as $key=>$val) {
// //echo $key.$val;
// $page->parameter .= "$key=".urlencode($val)."&";
// }
//  	 // $page=new \Think\Page($count,2);
//  	$page->setConfig('prev','上一页');
//     	$page->setConfig('next','下一页');
//  	 $info=$m->where($where)->limit($page->firstRow.",".$page->listRows)->select();
	
//  	 $show=$page->show();
//  	 $this->assign("key",$k);
//  	 $this->assign("page",$show);
//  	 $this->assign("info",$info);
//  	 $this->display('index/search');
//  }

public function edit($id){
	$m=M('user');
	$info=$m->where('id='.$id)->select();

	$this->assign("info",$info);
	$this->display('index/edit');
}
public function update(){
	$m=M('user');
	$id=$_POST['id'];
	$data['username']=$_POST['username'];
	$data['email']=$_POST['email'];
	if($m->where("id=".$id)->save($data)){
		$this->success('修改成功','Admin.php?m=home&c=index&a=index');
	}else{
		$this->error('修改失败');
	}
}
}