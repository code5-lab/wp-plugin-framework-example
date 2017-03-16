<?php
namespace Com\CodeFive\Example\Controllers;

use Com\CodeFive\Framework\Core\Controllers\BaseController;
use Com\CodeFive\Framework\Core\Render\Render;

class FrontEndShortCodesController extends BaseController
{
    //[a_short_code a_var='a_var' anotherVar='another var']
    public function aShortCode($aVar = null, $anotherVar = null, $content = null)
    {
        var_dump($this->context, $aVar, $anotherVar, $content);

        Render::template($this->context, 'shortcode/index', []);
    }
}