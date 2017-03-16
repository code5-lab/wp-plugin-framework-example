<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 15/03/2017
 * Time: 18:22
 */

namespace Com\CodeFive\Example\Controllers;


use Com\CodeFive\Framework\Core\Render\Render;

class AnApiController
{
    public function handler()
    {
        Render::json(['message' => $_REQUEST], 201, true);
    }
}