<?php

namespace app\admin\controller;

use app\admin\model\ManagerUserModel;
use think\Controller;
use think\Request;


class ManagerUserController extends Controller
{
    /**
     * @var Request $request
     */
    protected $request;

    /**
     * @var ManagerUserModel $model
     */
    protected $model;

    /**
     * 初始化依赖注入 Request 模型
     * @param  $request
     *
     */
    public function __construct(Request $request)
    {
        parent::__construct();
        $this->request = $request;
        $this->model = ManagerUserModel::getInstance();
    }

    /**
     * 显示资源列表
     *
     */
    public function index()
    {
        return $this->view->fetch('index');
    }

    /**
     * 显示创建资源表单页.
     *
     */
    public function create()
    {
        return $this->view->fetch('create');
    }

    /**
     * 保存新建的资源
     *
     * @return \think\Response
     */
    public function save()
    {
        $params = $this->request->param();
        $params['ip'] = $this->request->ip();
        $result = $this->model->createUser($params);
        return json($result);

    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
