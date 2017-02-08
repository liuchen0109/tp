<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{

    protected $patchValidate = true;
    	protected $_validate = array(
    	array("username", "require", "用户名不能为空"),
        array("username", "/\w{4,8}/", "请输入4-8位数字字母下划线"),
        array("password", "require", "密码不能为空"),
        array("password", "/\w{4,8}/", "密码格式为4-8位数字字母下划线"),

        array("repassword", "require", "确认密码不能为空"),
        array("email", "require", "邮箱不能够为空"),
        array("email", "email", "邮箱格式不正确"),
        array('repassword','password','确认密码不正确',0,'confirm'),

        );
    }