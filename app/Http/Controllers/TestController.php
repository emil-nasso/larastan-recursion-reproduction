<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(): string
    {
        $model = MyModel::make();
        return $model->testAttribute;
    }
}
