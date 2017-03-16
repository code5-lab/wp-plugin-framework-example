<?php

namespace Com\CodeFive\Example\Controllers\Admin;


use Com\CodeFive\Example\Models\Table;
use Com\CodeFive\Framework\Core\Controllers\BaseController;
use Com\CodeFive\Framework\Core\Render\Render;

class MainController extends BaseController
{
    public function index()
    {
        $texts = Table::all();

        Render::template($this->context, 'admin/common/wrapper', [
            'title' => 'Settings',
            'class' => 'manage-groups',
            'content' => Render::template($this->context, 'admin/index/index', ['texts' => $texts], true)
        ]);
    }

    public function anEndpoint()
    {
        Render::json(Table::whereId($_REQUEST['id'] ?: 0)->get());
    }

    public function anotherEndpoint()
    {
        Render::json(Table::whereId($_REQUEST['id'] ?: 0)->get());
    }
}