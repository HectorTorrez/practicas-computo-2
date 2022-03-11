<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{

    public function index(){
        // return "Mi primer controlador";
        return view("Test/index")->with('title','Mi primer aplicacion con Laravel');
    }

}