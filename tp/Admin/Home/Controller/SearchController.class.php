<?php
namespace Home\Controller;
use Think\Controller;

class SearchController extends Controller {
    
   public function search(){

     $k=$_POST['keywords'];

     $where['username']=array('like',"%".$_POST['keywords']."%");
     $m=M('user');
     // $count=Count($info);

     $page=new \Think\Page($m->where($where)->Count(),2);
//      foreach($where as $key=>$val) {
// //echo $key.$val;
// $page->parameter .= "$key=".urlencode($val)."&";
// }
     // $page=new \Think\Page($count,2);

    $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
     $info=$m->where($where)->limit($page->firstRow.",".$page->listRows)->select();
    
     $show=$page->show();
     $this->assign("key",$k);
     $this->assign("page",$show);
     $this->assign("info",$info);
     $this->display();
 }
}