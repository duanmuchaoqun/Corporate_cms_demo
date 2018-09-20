<?php

namespace app\admin\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'username' => 'require|unique:manager_user|regex:/^[A-Za-z0-9]{5,10}+$/',
        'phone' => 'require|unique:manager_user|mobile',
        'email' => 'require|unique:manager_user|email',
        'password' => 'require|regex:/(.+){6,12}$/',
        'repassword' => 'require|confirm:password|regex:/(.+){6,12}$/',

    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require' => '用户名必须填写',
        'username.unique' => '用户名已经存在',
        'username.regex' => '用户名必须为5-10为英文字母和数字字符',
        'password.require' => '密码必须填写',
        'password.regex' => '密码必须为6-12为数字',
        'repassword.require' => '确认密码必须填写',
        'repassword.regex' => '确认密码必须为6-12为数字',
        'repassword.confirm' => '两次输入的密码不一致',
        'email.require' => '邮箱必填填写',
        'email.unique' => '邮箱已经存在',
        'email' => '邮箱格式错误',
        'phone' => '手机号码格式错误',
        'phone.unique' => '手机号码已经存在',
        'phone.require' => '电话号码必填填写',
    ];
}
