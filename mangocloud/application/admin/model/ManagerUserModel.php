<?php

namespace app\admin\model;

use app\admin\base\BaseModel;
use app\admin\validate\User;
use think\Exception;


class ManagerUserModel extends BaseModel
{
    /**
     * @var User $userValidate
     */
    protected $userValidate;

    public function __construct()
    {
        parent::__construct();
        $this->userValidate = new User();

    }

    public function createUser($data = [])
    {
        // 验证相关参数合法性
        if (!$this->userValidate->check($data)) {
            return ['code' => 101, 'data' => [], 'msg' => $this->userValidate->getError()];
        }
        try {
            $data['password'] = md5($data['password']);
            $data['create_time'] = time();
            $data['update_time'] = time();
            $data['login_time'] = time();
            if (!$this->save($data)) {
                return ['code' => 102, 'data' => [], 'msg' => '创建管理员失败'];
            }
            $user_data = [
                'id' => $this->id,
                'username' => $this->username,
                'phone' => $this->phone,
                'email' => $this->email,
                'create_time' => date('Ymd H:i:s',$this->create_time)
            ];
            return ['code' => 100, 'data' => $user_data, 'msg' => '创建管理员成功'];
        } catch (Exception $exception) {
            return ['code' => 103, 'data' => [], 'msg' => $exception->getMessage()];
        }


    }
}
